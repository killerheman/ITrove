<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeadFollowupReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $leads;
    public $overdueLeads;

    public function __construct($leads, $overdueLeads = [])
    {
        $this->leads = $leads;
        $this->overdueLeads = $overdueLeads;
    }

    public function envelope()
    {
        $count = count($this->leads) + count($this->overdueLeads);
        return new Envelope(
            subject: "📌 Daily Lead Alert: You have {$count} leads to contact today | Innovation Trove CRM",
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.lead_followup_reminder',
            with: [
                'leads' => $this->leads,
                'overdueLeads' => $this->overdueLeads,
            ],
        );
    }

    public function attachments()
    {
        return [];
    }
}
