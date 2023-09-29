<?php
// If-Else Statements
$age = 20;

echo "If-Else Statements:\n";
// $age greater than or equal 18
if ($age >= 18) {
    echo "You are an adult.\n";
} else {
    echo "You are a minor.\n";
}

// For Loop
// while $i is less or equal than 5
echo "\nFor Loop:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i\n";
}

// While Loop
echo "\nWhile Loop:\n";
// while $j is less or equal than 3
$j = 1;
while ($j <= 3) {
    echo "Iteration $j\n";
    $j++;
}

// Do-While Loop
echo "\nDo-While Loop:\n";
// while $k less or equal than 2
$k = 1;
do {
    echo "Iteration $k\n";
    $k++;
} while ($k <= 2);

// Switch Statement
echo "\nSwitch Statement:\n";
$dayOfWeek = "Monday";
switch ($dayOfWeek) {
    case "Monday":
        echo "It's Monday, the start of the week.\n";
        break;
    case "Friday":
        echo "It's Friday, almost the weekend!\n";
        break;
    default:
        echo "It's another day of the week.\n";
        break;
}

function getDayOfWeek($dayNumber): string {
    return match($dayNumber) { // from PHP 8.0
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        default => 'Invalid day number'
    };
}

echo getDayOfWeek(3) . "\n";  // Output: Wednesday
echo getDayOfWeek(7) . "\n";  // Output: Invalid day number
