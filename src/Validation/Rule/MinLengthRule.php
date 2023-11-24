<?php

namespace App\Validation\Rule;

class MinLengthRule extends LengthAwareRule
{

    public function validate(string $password): bool
    {
        return strlen($password) >= $this->length;
    }

}
