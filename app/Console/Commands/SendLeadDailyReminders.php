<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Lead;
use App\Models\User;
use App\Mail\LeadFollowupReminderMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendLeadDailyReminders extends Command
{
    protected $signature = 'leads:send-daily-reminders';
    protected $description = 'Send email reminders to admin for leads scheduled to contact today';

    public function handle()
    {
        $todayLeads = Lead::whereDate('next_followup_date', Carbon::today())
            ->whereNotIn('status', ['Won', 'Lost', 'Junk'])
            ->get();

        $overdueLeads = Lead::where('next_followup_date', '<', Carbon::today())
            ->whereNotIn('status', ['Won', 'Lost', 'Junk'])
            ->get();

        $totalCount = $todayLeads->count() + $overdueLeads->count();

        if ($totalCount === 0) {
            $this->info('No leads scheduled for today or overdue.');
            return 0;
        }

        // Send to all admin users
        $adminUsers = User::all();

        foreach ($adminUsers as $admin) {
            if ($admin->email) {
                try {
                    Mail::to($admin->email)->send(new LeadFollowupReminderMail($todayLeads, $overdueLeads));
                    $this->info("Daily lead reminder sent to {$admin->email}");
                } catch (\Exception $e) {
                    $this->error("Failed sending email to {$admin->email}: " . $e->getMessage());
                }
            }
        }

        return 0;
    }
}
