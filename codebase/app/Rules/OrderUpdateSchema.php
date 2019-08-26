<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OrderUpdateSchema implements Rule
{
    private $validProperties = ['status'];

    /**
     * OrderNew constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'INVALID_REQUEST_DATA';
    }
}
