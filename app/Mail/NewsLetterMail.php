<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsLetterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Welcome to Innovation Trove | Technology & Engineering Insights',
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.news_letter',
            with: ['data' => $this->data],
        );
    }

    public function attachments()
    {
        return [];
    }
}
