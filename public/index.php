<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Validation\PasswordValidator;
use App\Validation\Rule;

$validator = new PasswordValidator();
$validator->addRule(new Rule\MinLengthRule(8));
$validator->addRule(new Rule\MaxLengthRule(16));
$validator->addRule(new Rule\ContainsCapitalLetter());
$validator->addRule(new Rule\NotContainSpaces());
$validator->addRule(new Rule\ContainsDigits());
$validator->addRule(new Rule\ContainsSpecialCharacter());
$password = 'iHate3Tomatoz';

dump($validator);

dump(
    sprintf(
        'password %s is%s valid',
        $password,
        ! $validator->isValid($password) ? ' not' : ''
    )
);
