<?php

test('it returns true for a shuffled perfect integer list', function () {
    $numList = [4, 4, 2, 3, 1, 3, 4, 3, 2, 4];
    $result = (new \App\Test20231208\Uzd34\PerfectIntegerList())->run($numList);
    expect($result)->toBeTrue();
});

test('it returns false for a shuffled non perfect integer list', function () {
    $numList = [4, 4, 2, 3, 1, 3, 4, 3, 2];
    $result = (new \App\Test20231208\Uzd34\PerfectIntegerList())->run($numList);
    expect($result)->toBeFalse();
});

test('it returns true for a perfect integer list', function () {
    $numList = [1, 2, 2, 3, 3, 3];
    $result = (new \App\Test20231208\Uzd34\PerfectIntegerList())->run($numList);
    expect($result)->toBeTrue();
});

test('it returns false for a non-perfect integer list', function () {
    $numList = [1, 2, 3, 4];
    $result = (new \App\Test20231208\Uzd34\PerfectIntegerList())->run($numList);
    expect($result)->toBeFalse();
});

test('it returns true for an empty integer list', function () {
    $numList = [];
    $result = (new \App\Test20231208\Uzd34\PerfectIntegerList())->run($numList);
    expect($result)->toBeTrue();
});

test('it returns true for a single-element perfect integer list', function () {
    $numList = [1];
    $result = (new \App\Test20231208\Uzd34\PerfectIntegerList())->run($numList);
    expect($result)->toBeTrue();
});

test('it returns false for a single-element non-perfect integer list', function () {
    $numList = [0];
    $result = (new \App\Test20231208\Uzd34\PerfectIntegerList())->run($numList);
    expect($result)->toBeFalse();
});
