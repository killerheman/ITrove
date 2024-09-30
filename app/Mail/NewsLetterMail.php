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
            subject: 'News Letter Mail',
        );
    }

    public function content()
    {
        return new Content(
            markdown: 'emailviews.news_letter', // Use the path of your Markdown view
            with: ['data' => $this->data],
        );
    }

    public function attachments()
    {
        return [];
    }
}
