<?php

namespace App\Validation;

class PasswordValidator
{

    /** @var Rule\PasswordValidationRule[] */
    private array $rules = [];

    public function addRule(Rule\PasswordValidationRule $rule): void
    {
        $this->rules[] = $rule;
    }

    public function isValid(string $string): bool
    {
        foreach ($this->rules as $rule) {
            if ( ! $rule->validate($string)) {
                return false;
            }
        }

        return true;
    }

}
