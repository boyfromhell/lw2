<?php

namespace App\Mail;

use App\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationConfirmation extends Mailable
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
     * @return void
     * @var $participant
     */
    public function __construct($participant)
    {
        $this->participant = $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fees = '$' . number_format($this->participant->tournament_fees, 2);
        return $this->markdown('email.registration-confirmation')
            ->from(env('MAIL_FROM_ADDRESS'))
            ->subject('Watercade Tennis Tournament Registration Confirmation')
            ->with([
                'first_name' => $this->participant->first_name,
                'last_name' => $this->participant->last_name,
                'event1' => Participant::$events[$this->participant->event1],
                'event1_partner' => $this->participant->event1_partner,
                'event2' => isset($this->participant->event2) ? Participant::$events[$this->participant->event2] : "",
                'event2_partner' => $this->participant->event2_partner,
                'shirt_size' => Participant::$tShirtSizes[$this->participant->shirt_size],
                'tournament_fees' => $fees,
            ])
        ;
    }
}
