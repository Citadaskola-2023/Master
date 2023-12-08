<?php

declare(strict_types=1);

namespace App\Test20231208\Math;

/**
 * Write a function to subtract 1 from the digits, where digits is a list representing a positive integer
 *
 * With input [1, 2, 3, 4] result must be [1, 2, 3, 3]
 */


class SubtractOne
{
    public function run(array $digits): array
    {
        $numbers = [];
        $length = count($numbers);

        for ($i = 0; $i < $length - 1; $i++) {
            $nextDigitIndex = $length - $i - 1;
            $nextDigit = $digits[$nextDigitIndex];

            if ($nextDigit === 0) {
                $digits[$nextDigitIndex] = 9;
            } else {
                $digits[$nextDigitIndex] = $nextDigit - 1;
                break;
            }

            if ($i === 0) {
                return $digits;
            }
        }

        if ($digits[0] === 0 && count($digits) > 1) {
            array_shift($digits);
        }

        return $digits;
    }
}


