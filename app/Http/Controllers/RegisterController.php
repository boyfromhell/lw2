<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationConfirmationExternal;
use App\Mail\RegistrationConfirmationInternal;
use App\Participant;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function create(RegistrationRequest $request)
    {
//        dd($request->all());
        $participant = $this->createParticipant($request->all());
//        $ccMailRecipients = explode(',', env('MAIL_CC'));
//        Mail::to($participant['email'])->cc($ccMailRecipients)->queue(new RegistrationConfirmationInternal($user));

        return response()->success();
    }

    /**
     * Create a participant instance after a valid registration.
     *
     * @param  array $data
     * @return Participant
     */
    protected function createParticipant(array $data)
    {
        if(isset($data['event2']) && $data['event1'] !== $data['event2']) {
            $event2 = $data['event2'];
        } else {
            $event2 = null;
        }
        $tournamentFees = $event2 === null ? 20 : 40;

        return Participant::create([
            'event_year' => 2019,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'address1' => $data['address1'],
            'address2' => isset($data['address2'])?$data['address2']:null,
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'phone_number' => $data['phone_number'],
            'shirt_size' => $data['shirt_size'],
            'event1' => $data['event1'],
            'event1_partner' => isset($data['event1_partner'])?$data['event1_partner']:null,
            'event2' => $event2,
            'event2_partner' => isset($data['event2_partner'])?$data['event2_partner']:null,
            'signed_name' => $data['signed_name'],
            'tournament_fees' => $tournamentFees,
            'fees_paid' => False
        ]);
    }
}
