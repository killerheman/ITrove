<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\LeadActivity;
use App\Models\User;
use App\Mail\LeadFollowupReminderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class LeadController extends Controller
{
    public function index(Request $request)
    {
        $query = Lead::with(['assignedUser'])->latest();

        // View Type Tabs (All, Today, Overdue, Hot, Won)
        $viewType = $request->get('view', 'all');
        if ($viewType === 'today') {
            $query->whereDate('next_followup_date', Carbon::today())
                  ->whereNotIn('status', ['Won', 'Lost', 'Junk']);
        } elseif ($viewType === 'overdue') {
            $query->where('next_followup_date', '<', Carbon::today())
                  ->whereNotIn('status', ['Won', 'Lost', 'Junk']);
        } elseif ($viewType === 'hot') {
            $query->where('priority', 'Hot')
                  ->whereNotIn('status', ['Won', 'Lost', 'Junk']);
        } elseif ($viewType === 'won') {
            $query->where('status', 'Won');
        }

        // Product / Campaign Filter
        if ($request->filled('campaign') && $request->campaign !== 'all') {
            $query->where('product_campaign', $request->campaign);
        }

        // Lead Status Filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Priority Filter
        if ($request->filled('priority') && $request->priority !== 'all') {
            $query->where('priority', $request->priority);
        }

        // Search Query
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('phone', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('company_name', 'LIKE', "%{$search}%")
                  ->orWhere('city', 'LIKE', "%{$search}%")
                  ->orWhere('notes', 'LIKE', "%{$search}%");
            });
        }

        $leads = $query->paginate(15)->withQueryString();

        // Calculate Executive Dashboard Stats
        $totalCount = Lead::count();
        $wonCount = Lead::where('status', 'Won')->count();
        $conversionRate = $totalCount > 0 ? round(($wonCount / $totalCount) * 100, 1) : 0;

        $stats = [
            'total' => $totalCount,
            'today' => Lead::whereDate('next_followup_date', Carbon::today())->whereNotIn('status', ['Won', 'Lost', 'Junk'])->count(),
            'overdue' => Lead::where('next_followup_date', '<', Carbon::today())->whereNotIn('status', ['Won', 'Lost', 'Junk'])->count(),
            'hot' => Lead::where('priority', 'Hot')->whereNotIn('status', ['Won', 'Lost', 'Junk'])->count(),
            'won_value' => Lead::where('status', 'Won')->sum('estimated_value'),
            'pipeline_value' => Lead::whereNotIn('status', ['Lost', 'Junk'])->sum('estimated_value'),
            'conversion_rate' => $conversionRate,
            'pos_count' => Lead::where('product_campaign', 'ITrove POS')->count(),
            'school_count' => Lead::where('product_campaign', 'ITrove School')->count(),
            'agency_count' => Lead::where('product_campaign', 'ITrove Agency')->count(),
        ];

        // Kanban Pipeline Stage Leads
        $kanbanStages = [
            'New' => Lead::where('status', 'New')->latest()->take(10)->get(),
            'Contacted' => Lead::where('status', 'Contacted')->latest()->take(10)->get(),
            'Demo Scheduled' => Lead::where('status', 'Demo Scheduled')->latest()->take(10)->get(),
            'Proposal Sent' => Lead::where('status', 'Proposal Sent')->latest()->take(10)->get(),
            'Won' => Lead::where('status', 'Won')->latest()->take(10)->get(),
        ];

        $users = User::all();

        return view('admin.lead.index', compact('leads', 'stats', 'kanbanStages', 'users', 'viewType'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'email' => 'nullable|email|max:255',
            'company_name' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'product_campaign' => 'required|string',
            'lead_source' => 'required|string',
            'status' => 'required|string',
            'priority' => 'required|string',
            'estimated_value' => 'nullable|numeric|min:0',
            'next_followup_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'assigned_to' => 'nullable|exists:users,id',
        ]);

        $validated['estimated_value'] = $validated['estimated_value'] ?? 0;
        $validated['last_contacted_at'] = Carbon::now();

        $lead = Lead::create($validated);

        // Initial Activity
        LeadActivity::create([
            'lead_id' => $lead->id,
            'user_id' => auth()->id(),
            'activity_type' => 'Lead Created',
            'note' => $request->notes ?? 'Lead created via Admin Panel.',
            'next_followup_date' => $lead->next_followup_date,
        ]);

        return redirect()->route('admin.lead.index')->with('success', 'Lead created successfully!');
    }

    public function show($id)
    {
        $lead = Lead::with(['activities.user', 'assignedUser'])->findOrFail($id);
        return response()->json([
            'success' => true,
            'lead' => $lead,
            'whatsapp_url' => $lead->whatsapp_url,
            'clean_phone' => $lead->clean_phone,
        ]);
    }

    public function update(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'email' => 'nullable|email|max:255',
            'company_name' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'product_campaign' => 'required|string',
            'lead_source' => 'required|string',
            'status' => 'required|string',
            'priority' => 'required|string',
            'estimated_value' => 'nullable|numeric|min:0',
            'next_followup_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'assigned_to' => 'nullable|exists:users,id',
        ]);

        $lead->update($validated);

        return redirect()->back()->with('success', 'Lead updated successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
            'priority' => 'nullable|string',
            'next_followup_date' => 'nullable|date',
            'note' => 'nullable|string',
        ]);

        $oldStatus = $lead->status;
        $lead->status = $request->status;
        if ($request->filled('priority')) {
            $lead->priority = $request->priority;
        }
        if ($request->has('estimated_value')) {
            $lead->estimated_value = $request->estimated_value ?? 0;
        }
        if ($request->filled('next_followup_date')) {
            $lead->next_followup_date = $request->next_followup_date;
        }
        $lead->last_contacted_at = Carbon::now();
        $lead->save();

        // Create activity record
        $noteText = "Status changed from {$oldStatus} to {$lead->status}.";
        if ($request->filled('note')) {
            $noteText .= " Note: " . $request->note;
        }

        LeadActivity::create([
            'lead_id' => $lead->id,
            'user_id' => auth()->id(),
            'activity_type' => 'Status Update',
            'note' => $noteText,
            'next_followup_date' => $lead->next_followup_date,
        ]);

        return redirect()->back()->with('success', 'Lead status updated!');
    }

    public function addActivity(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);

        $request->validate([
            'activity_type' => 'required|string',
            'note' => 'required|string',
            'next_followup_date' => 'nullable|date',
        ]);

        if ($request->filled('next_followup_date')) {
            $lead->next_followup_date = $request->next_followup_date;
        }
        $lead->last_contacted_at = Carbon::now();
        $lead->save();

        LeadActivity::create([
            'lead_id' => $lead->id,
            'user_id' => auth()->id(),
            'activity_type' => $request->activity_type,
            'note' => $request->note,
            'next_followup_date' => $request->next_followup_date,
        ]);

        return redirect()->back()->with('success', 'Call log / note added to lead!');
    }

    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return redirect()->route('admin.lead.index')->with('success', 'Lead deleted successfully!');
    }

    public function sendDailyDigest()
    {
        $todayLeads = Lead::whereDate('next_followup_date', Carbon::today())
            ->whereNotIn('status', ['Won', 'Lost', 'Junk'])
            ->get();

        $overdueLeads = Lead::where('next_followup_date', '<', Carbon::today())
            ->whereNotIn('status', ['Won', 'Lost', 'Junk'])
            ->get();

        $adminUser = auth()->user();
        $adminEmail = $adminUser->email ?? env('MAIL_FROM_ADDRESS', 'admin@innovationtrove.com');

        try {
            Mail::to($adminEmail)->send(new LeadFollowupReminderMail($todayLeads, $overdueLeads));
            return redirect()->back()->with('success', "Daily lead follow-up reminder sent to {$adminEmail}!");
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Could not send mail: " . $e->getMessage());
        }
    }
}
