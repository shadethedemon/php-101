<?php

$input = isset($argv[1]) ? $argv[1] : die("No input given\n");

/**
 * Exercise 3 - Factorial
 *
 * For this exercise you will write a function (basic, variable or anonymous) that returns the factorial of the given
 * input.
 *
 * Ex: 5! = 1x2x3x4x5 = 120
 *
 *
 * Bonus: Use your factorial function to solve k-permutations of n
 * (k n) = n! / ((n - k)! * k!)
 */

function factorial($n)
{
    if ($n < 2) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial($input) . PHP_EOL;
