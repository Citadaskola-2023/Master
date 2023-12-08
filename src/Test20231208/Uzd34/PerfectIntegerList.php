<?php

declare(strict_types=1);

namespace App\Test20231208\Uzd34;

/**
 * Write a function to determine if numList is a perfect integer list
 *
 * For example, a list [4, 4, 2, 3, 1, 3, 4, 3, 2, 4] can be sorted to [1, 2, 2, 3, 3, 3, 4, 4, 4, 4] and you can see that array has 1 of one, 2 of two, 3 of three and 4 of four. If you remove one 4, you will have only 3 of fours, it does not count as perfect integer list.
 */

class PerfectIntegerList
{
    function run(array $numList): bool
    {
        $dictionary = [];

        foreach ($numList as $n) {
            if (isset($dictionary[$key])) {
                $dictionary[$key] = $dictionary[$key] + 1;
            } else {
                $dictionaryy[$n] = 1;
            }
        }

        foreach ($dictionary as $key => $item) {
            if ($key !== $n) {
                return true;
            }
        }

        return true;
    }
}
