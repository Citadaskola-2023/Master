<?php


test('it subtracts one from an array of digits', function () {
    $digits = [1, 2, 3];
    $result = (new \App\Test20231208\Uzd34\SubtractOne())->run($digits);
    expect($result)->toBe([1, 2, 2]);
});

test('it subtracts one from an array of digits with a leading zero', function () {
    $digits = [1, 0, 3];
    $result = (new \App\Test20231208\Uzd34\SubtractOne())->run($digits);
    expect($result)->toBe([1, 0, 2]);
});

test('it subtracts one from an array of digits with multiple leading zeros', function () {
    $digits = [0, 0, 3];
    $result = (new \App\Test20231208\Uzd34\SubtractOne())->run($digits);
    expect($result)->toBe([0, 2]);
});

test('it subtracts one from a single-digit array', function () {
    $digits = [3];
    $result = (new \App\Test20231208\Uzd34\SubtractOne())->run($digits);
    expect($result)->toBe([2]);
});

test('it subtracts one from an array of digits resulting in a leading zero removal', function () {
    $digits = [1, 0, 0];
    $result = (new \App\Test20231208\Uzd34\SubtractOne())->run($digits);
    expect($result)->toBe([9, 9]);
});

test('it subtracts one from an array of digits resulting in an empty array', function () {
    $digits = [1];
    $result = (new \App\Test20231208\Uzd34\SubtractOne())->run($digits);
    expect($result)->toBe([0]);
});
