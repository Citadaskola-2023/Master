<?php

namespace App\Validation\Rule;

class MaxLengthRule extends LengthAwareRule
{

    public function validate(string $password): bool
    {
        return strlen($password) <= $this->length;
    }

}
