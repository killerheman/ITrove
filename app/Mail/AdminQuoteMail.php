<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope()
    {
        $name = is_object($this->data) ? ($this->data->name ?? 'Client') : ($this->data['name'] ?? 'Client');
        return new Envelope(
            subject: '[New Quote Lead] Project Quote Request from ' . $name . ' | Innovation Trove',
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.adminquote',
            with: ['data' => $this->data],
        );
    }

    public function attachments()
    {
        return [];
    }
}
