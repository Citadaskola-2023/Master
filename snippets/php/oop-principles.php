<?php

// Polymorphism
interface PasswordValidationRule
{
    public function validate(string $password): bool;

}


// Polymorpism
// Encapsulation
abstract class LengthAwareRule implements PasswordValidationRule
{
    protected int $length;

    public function __construct(int $length)
    {
        $this->length = $length;
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


// polymorphism
class ContainsNumberRule implements PasswordValidationRule
{
    public function validate(string $password): bool
    {
        return preg_match('/\d/', $password);
    }

}

// polymorphism
class NoSpacesRule implements PasswordValidationRule
{
    public function validate(string $password): bool
    {
        return ! preg_match('/\s/', $password);
    }

}

// Encapsulation
class PasswordValidator
{
    private array $rules = [];

    public function addRule(PasswordValidationRule $rule): void
    {
        $this->rules[] = $rule;
    }

    public function validatePassword(string $password): bool
    {
        foreach ($this->rules as $rule) {
            if ( ! $rule->validate($password)) {
                return false;
            }
        }

        return true;
    }

}

// Usage
$validator = new PasswordValidator();

$validator->addRule(new MinLengthRule(8));
$validator->addRule(new ContainsNumberRule());
$validator->addRule(new NoSpacesRule());

$password = 'MySecurePassword123';
if ($validator->validatePassword($password)) {
    echo "Password is valid!";
} else {
    echo "Password is invalid!";
}