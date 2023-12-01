<?php


use App\Validation\Rule\MinLengthRule;

it('tests', function () {
    $pass = 'pass';

    $res = (new MinLengthRule(8))->validate($pass);

    expect($res)->toBeFalse();

});