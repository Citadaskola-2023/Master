<?php

namespace App\Validation\Rule;

use App\Validation\Rule;

class NotContainSpaces implements Rule\PasswordValidationRule
{

    public function validate(string $password): bool
    {
        return ! preg_match('/\s/', $password);
    }

}
