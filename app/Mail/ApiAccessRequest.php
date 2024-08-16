<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class ApiAccessRequest extends Mailable
{
    use Queueable, SerializesModels;

    protected $apiRequest;

    public function __construct($apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }

    public function build()
    {
        return $this->view('email-api')
            ->with([
                'name' => $this->apiRequest->first_name . ' ' . $this->apiRequest->last_name,
                'email' => $this->apiRequest->email,
                'api_key' => Str::random(32) // Génération d'une clé API aléatoire
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Api Access Request',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
