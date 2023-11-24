<?php

namespace App\Validation\Rule;

class ContainsSpecialCharacter implements PasswordValidationRule
{

    public function validate(string $password): bool
    {
        return preg_match('/[\!\@\£\$%\^\&\*]/', $password);
    }

}
