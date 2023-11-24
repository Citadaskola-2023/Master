<?php

namespace App\Validation\Rule;

abstract class LengthAwareRule implements PasswordValidationRule
{

    public function __construct(
        protected int $length
    ) {
    }

}