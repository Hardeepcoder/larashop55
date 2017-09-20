<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class minMaxLength implements Rule
{
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
        //
		return (strlen($value) <=30 && strlen($value)>=6);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Maximum value 30 and minimum value is 6.';
    }
}
