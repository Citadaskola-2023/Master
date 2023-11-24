<?php

namespace App\Validation\Rule;

interface PasswordValidationRule
{

    public function validate(string $password): bool;

}
