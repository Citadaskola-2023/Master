<?php

namespace App;

interface PasswordValidationRule
{

    public function validate(string $password): bool;

}

class ContainsCapitalLetter implements PasswordValidationRule
{
    public function validate(string $password): bool
    {
        return preg_match('/[A-Z]/', $password);
    }
}

class ContainsSpecialCharacter implements PasswordValidationRule
{
    public function validate(string $password): bool
    {
        return preg_match('/[\!\@\£\$%\^\&\*]/', $password);
    }
}


class ContainsDigits implements PasswordValidationRule
{
    public function validate(string $password): bool
    {
        return preg_match('/\d/', $password);
    }
}


class NotContainSpaces implements PasswordValidationRule
{
    public function validate(string $password): bool
    {
        return !preg_match('/\s/', $password);
    }
}

abstract class LengthAwareRule implements PasswordValidationRule
{
    public function __construct(
        protected int $length
    ) {
    }
}

class MinLengthRule extends LengthAwareRule
{

    public function validate(string $password): bool
    {
        return strlen($password) >= $this->length;
    }

}

class MaxLengthRule extends LengthAwareRule
{

    public function validate(string $password): bool
    {
        return strlen($password) <= $this->length;
    }
}

class PasswordValidator
{

    /**
     * @var PasswordValidationRule[]
     */
    private array $rules = [];

    public function addRule(PasswordValidationRule $rule): void
    {
        $this->rules[] = $rule;
    }

    public function isValid(string $string): bool
    {
        foreach ($this->rules as $rule) {
            if (!$rule->validate($string)) {
                return false;
            }
        }

        return true;
    }
}

$validator = new PasswordValidator();
$validator->addRule(new MinLengthRule(8));
$validator->addRule(new MaxLengthRule(16));
$validator->addRule(new ContainsCapitalLetter());
$validator->addRule(new NotContainSpaces());
$validator->addRule(new ContainsDigits());
$password = 'iHate3Tomato';
//echo 'password ' . $password . ' is' . (!$validator->isValid($password) ? ' not' : '') . ' valid';

printf('password %s is%s valid', $password, !$validator->isValid($password) ? ' not' : '');