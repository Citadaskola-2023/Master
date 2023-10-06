<?php

// if else statements

$age = 42;

if ($age >= 18) {
    echo 'You are an adult' . PHP_EOL;
} else {
    echo 'You are a minor' . PHP_EOL;
}

// For loop
for ($i = 1; $i <= 5; $i++) {
    echo 'Iteration ' . $i . PHP_EOL;
}

// While loops
$j = 1;
while ($j <= 3) {
    echo 'While Loop iteration ' . $j . PHP_EOL;
    $j = $j + 0.5;
}

// Do While
$k = 1;

do {
    echo 'Do While loop iteration ' . $k . PHP_EOL;
    $k++;
} while ($k <= 2);


//  komentars
# komenars
/* komentars */

/*
multi
line
komentārs
*/

$currentDay = date('l');
//echo $currentDay . PHP_EOL;
//$dayOfWeek = 'Friday';
echo match ($currentDay) {
    'Monday' => 'Not again...',
    'Friday' => 'Nice - Programming lessons :heart:',
    default => 'It\'s another day in the week',
};
echo PHP_EOL;