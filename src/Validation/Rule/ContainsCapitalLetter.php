<?php

namespace App\Validation\Rule;

use App\Validation\Rule;

class ContainsCapitalLetter implements Rule\PasswordValidationRule
{

    public function validate(string $password): bool
    {
        return preg_match('/[A-Z]/', $password);
    }

}
