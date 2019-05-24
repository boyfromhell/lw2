<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationConfirmationExternal;
use App\Mail\RegistrationConfirmationInternal;
use App\Participant;
use Carbon\Carbon;
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
        dd($request->all());
//        $participant = $this->createParticipant($request->all());
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
        return Participant::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'address1' => $data['address1'],
            'address2' => isset($data['address2'])?$data['address2']:null,
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'phone' => $data['phone'],


        ]);
    }
}
