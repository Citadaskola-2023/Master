<?php
// Arithmetic Operators
$a = 10;
$b = 5;

$sum = $a + $b;
$diff = $a - $b;
$mult = $a * $b;
$div = $a / $b;
$mod = $a % $b;


echo "Arithmetic Operators:\n";
echo "Addition: a + b = " . $sum . "\n";
echo "Subtraction: a - b = ". $diff . "\n";
echo "Multiplication: a * b = " . $mult . "\n";
echo "Division: a / b = " . $div . "\n";
echo "Modulus: a % b = " . $mod . "\n";

// Logical Operators
$trueValue = true;
$falseValue = false;

echo "\nLogical Operators:\n";
echo "AND: true AND false = " . ($trueValue && $falseValue) . "\n";   // Logical AND
echo "OR: true OR false = " . ($trueValue || $falseValue) . "\n";   // Logical OR
echo "NOT: NOT true = " . !$trueValue . "\n";   // Logical NOT
