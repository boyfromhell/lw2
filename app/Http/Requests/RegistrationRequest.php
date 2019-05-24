<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:100',
            'address1' => 'required|string|max:100',
            'address2' => 'string:max:50:nullable',
            'city' => 'required|string|max:50',
            'state' => 'required|string|max:2',
            'zip' => 'required|string|max:10',
            'phone_number' => 'required|string|max:15',
            'shirt_size' => 'required|string|max:2',
            'event1' => 'required|string|max:3',
            'event1_partner' => 'string|max:50|nullable',
            'event2' => 'string|max:3|nullable',
            'event2_partner' => 'string|max:50|nullable',
            'signed_name' => 'required|string|max:50',
            'recaptcha' => ['required', app(Recaptcha::class)],
        ];
    }
}
