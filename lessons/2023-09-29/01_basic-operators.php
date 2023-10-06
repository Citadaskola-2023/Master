<?php

$a = 10;
$b = 5;

$sum = $a + $b;
echo "Sum: " . $sum . "\n";


// patstāvīgi:
// Subtraction
// Multiplication
// Division












$sub = $a - $b;
echo "Sub: " . $sub . PHP_EOL;

$mul = $a * $b;
echo "Mul: " . $mul . PHP_EOL;

$div = $a / $b;
echo "Div: " . $div . PHP_EOL;


// Logical operators
$trueValue = true;
$falseValue = false;

// && || !

echo 'AND - true AND false = ' . (int) ($trueValue && $falseValue) . PHP_EOL;
echo 'OR - true OR false = ' . (int) ($trueValue || $falseValue) . PHP_EOL;
echo 'NOT: NOT true = ' . (int) !$trueValue . PHP_EOL;

// AND - true
// OR - false

echo 'AND - abc AND 42 = ' . (int) ('abc' && 42) . PHP_EOL;
echo 'OR - 0 OR \'\' = ' . (int) (0 || '') . PHP_EOL;