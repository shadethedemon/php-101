<?php
/**
 fizzbuzz.php
 Daniel Burgner PHP 101
 August 19, 2015
 */

$input = isset($argv[1]) ? $argv[1] : die("No input given\n");

/**
 If $input is divisable by 3 output 'Fizz'
 If $input is divisable by 5 output 'Buzz'
 If $input is divisable by both 3 and 5 output 'FizzBuzz'
*/
if (($input % 3) == 0) {
	print 'Fizz';
}
if (($input % 5) == 0) {
	print 'Buzz';
}
print PHP_EOL;

