<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public array $data; // Using typed property in PHP 8

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->from('contact@thesavants.in', 'The Savants')
                    ->to('contact@thesavants.in') // Set the recipient here
                    ->subject('New Contact Form Submission')
                    ->view('emails.contact') // Create this view for your email body
                    ->with('data', $this->data); // Pass the data to the view
    }
}
