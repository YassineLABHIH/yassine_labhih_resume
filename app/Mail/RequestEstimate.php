<?php

namespace App\Mail;

use App\Models\Estimate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestEstimate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(protected Estimate $estimate)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demande de devis',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.request-estimate',
            with: [
                'name' => $this->estimate->name,
                'first_name' => $this->estimate->first_name,
                'email' => $this->estimate->email,
                'tel' => $this->estimate->tel,
                'company' => $this->estimate->company,
                'activity' => $this->estimate->activity,
                'showcase_site' => $this->estimate->showcase_site,
                'e_commerce' => $this->estimate->e_commerce,
                'web_app' => $this->estimate->web_app,
                'mobile_app' => $this->estimate->mobile_app,
                'seo' => $this->estimate->seo,
                'other' => $this->estimate->other,
                'description' => $this->estimate->description,
                'promo_code' => $this->estimate->promo_code
            ],
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
