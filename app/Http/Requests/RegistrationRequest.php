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
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:50',
            'state' => 'required|string|max:2',
            'zip_code' => 'required|string|max:10',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:15',
            'shirt_size' => 'required|integer',
            'event1' => 'required|integer',
            'event1_partner' => 'string|nullable',
            'event2' => 'integer|nullable',
            'event2_partner' => 'string|nullable',
            'signed_name' => 'required|string|max:100',
            'recaptcha' => ['required', app(Recaptcha::class)],
        ];
    }
}
