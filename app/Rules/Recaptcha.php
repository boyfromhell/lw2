<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Zttp\Zttp;

class Recaptcha implements Rule
{
    /**
     * URL for Google Recaptcha token validation
     *
     */
    const URL = 'https://www.google.com/recaptcha/api/siteverify';

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Zttp::asFormParams()->post(static::URL, [
            'secret' => env('RECAPTCHA_PRIVATE_KEY'),
            'response' => $value,
        ])->json()['success'];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The recaptcha validation failed. Please try again.';
    }

    /**
     * This function can be used to test Recaptcha without sending a responses through Google
     *
     * @return mixed
     */
    public static function isInTestMode()
    {
        return Zttp::asFormParams()->post(static::URL, [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => 'test',
        ])->json()['success'];
    }
}
