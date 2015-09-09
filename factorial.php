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


function fac($a)
{
    if ($a <= 1) {
        return $a;
    }
    return fac($a-1) * $a;
}

function nPr($n, $r)
{
    if ($r === 0) {
        return 1;
    }
    if ($n === $r) {
        return fac($n);
    }
    if ($n <= $r) {
        die('Total number of items must be greater than number of items taken' .PHP_EOL);
    }
    return fac($n) / fac($n-$r);
}

function nCk($n, $k)
{
    if ($n === 0) {
        die('Total number of items cannot be 0.');
    }
    if ($n < $k) {
        die('Number of items taken cannot be greater than total number of items.');
    }
    if ($k == 0) {
        return $n;
    }
    return fac($n) / ( fac($n - $k) * fac($k));
}

for ($i = 1; $i < $argc; ++$i) {
    echo "$argv[$i]! = " . fac($argv[$i]) . PHP_EOL;
    if ($i % 2 === 0) {
        $j = $i-1;
        echo "There are " . nPr($argv[$j], $argv[$i]) . " Permutations for $argv[$i] from $argv[$j]" . PHP_EOL;
        echo "There are " . nCk($argv[$j], $argv[$i]) . " Combinations for $argv[$i] from $argv[$j]" . PHP_EOL;
    }
}
