<?php

class Pet
{
    public string $name;
    public int $age;
    private string $password;

    public function generatePassword()
    {
        $this->password = 'I<3Jerry';
    }
}

$tom = new Pet();
$tom->name = 'Tom';
$tom->age = 69;

$tom->generatePassword();

var_dump(json_encode($tom));