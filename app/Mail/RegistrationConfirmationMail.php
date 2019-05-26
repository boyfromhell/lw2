<?php

namespace App\Mail;

use App\Nova\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     *
     * The participant instance.
     *
     * @var Participant
     */
    private $participant;

    /**
     * Create a new message instance.
     * @var $participant
     * @return void
     */
    public function __construct($participant)
    {
        $this->$participant = $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject('Watercade Tennis Tournament Registration Confirmation')
            ->view('email.registration-confirmation-email');
    }
}
