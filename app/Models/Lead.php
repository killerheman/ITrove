<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'company_name',
        'city',
        'product_campaign',
        'lead_source',
        'status',
        'priority',
        'estimated_value',
        'next_followup_date',
        'last_contacted_at',
        'notes',
        'assigned_to',
    ];

    protected $casts = [
        'next_followup_date' => 'datetime',
        'last_contacted_at' => 'datetime',
        'estimated_value' => 'decimal:2',
    ];

    public function activities()
    {
        return $this->hasMany(LeadActivity::class)->orderBy('created_at', 'desc');
    }

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Scopes
    public function scopeContactToday($query)
    {
        return $query->whereDate('next_followup_date', '<=', Carbon::today())
            ->whereNotIn('status', ['Won', 'Lost', 'Junk']);
    }

    public function scopeOverdue($query)
    {
        return $query->where('next_followup_date', '<', Carbon::now())
            ->whereNotIn('status', ['Won', 'Lost', 'Junk']);
    }

    public function scopeByCampaign($query, $campaign)
    {
        if ($campaign && $campaign !== 'all') {
            return $query->where('product_campaign', $campaign);
        }
        return $query;
    }

    // Accessors
    public function getCleanPhoneAttribute()
    {
        $phone = preg_replace('/[^0-9]/', '', $this->phone ?? '');
        if (strlen($phone) === 10) {
            $phone = '91' . $phone; // Default to India +91 if 10 digits
        }
        return $phone;
    }

    public function getWhatsappUrlAttribute()
    {
        $cleanPhone = $this->clean_phone;
        $text = rawurlencode("Hi " . $this->name . ", regarding your inquiry for " . $this->product_campaign . " with Innovation Trove...");
        return "https://wa.me/{$cleanPhone}?text={$text}";
    }

    public function getStatusBadgeClassAttribute()
    {
        return match ($this->status) {
            'New' => 'badge-light-primary',
            'Contacted' => 'badge-light-info',
            'Follow-up Scheduled' => 'badge-light-warning',
            'Contact Tomorrow' => 'badge-light-warning font-weight-bold',
            'Demo Scheduled' => 'badge-light-secondary font-weight-bold',
            'Demo Completed' => 'badge-light-info font-weight-bold',
            'Account Created' => 'badge-light-primary font-weight-bold',
            'Proposal Sent' => 'badge-light-dark',
            'Won', 'Account Activated / Paid' => 'badge-light-success font-weight-bold',
            'Lost', 'Junk' => 'badge-light-danger',
            default => 'badge-light-primary',
        };
    }

    public function getPriorityBadgeClassAttribute()
    {
        return match ($this->priority) {
            'Hot' => 'badge-danger',
            'Warm' => 'badge-warning',
            'Cold' => 'badge-info',
            default => 'badge-secondary',
        };
    }

    public function isScheduledToday()
    {
        return $this->next_followup_date && $this->next_followup_date->isToday();
    }

    public function isOverdue()
    {
        return $this->next_followup_date && $this->next_followup_date->isPast() && !$this->next_followup_date->isToday();
    }
}
