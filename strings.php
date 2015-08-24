<?php

/**
 * Casting strings to integers.
 */
$string = 'abc';

$stringAsInt = (int)$string;
// outputs 0
echo "{$stringAsInt}\n";

$string = '12abc';
$stringAsInt = (int)$string;
// outputs 12
echo "{$stringAsInt}\n";

$string = 'abcdef';

//echos 'b';
echo "{$string[1]}\n";

$string[3] = 'Z';
//String is now abcZef
echo "{$string}\n";

$string = 'abcdef';

$length = strlen($string);
//outputs 6
echo "{$length}\n";

$substr = substr($string, 0, 3);

// outputs abc
echo "{$substr}\n";

$substr = substr($string, 3);
// outputs def
echo "{$substr}\n";

$substr = substr($string, -2);
// outputs ef
echo "{$substr}\n";

$strreplace = str_replace('cd', 'XX', $string);
//Replaces all occurrences of 'cd' with 'XX'
echo "{$strreplace}\n";
// does not change the original string
echo "{$string}\n";

$position = strpos($string, 'e');
echo "The character 'e' is at position '{$position}'\n";

$position = strpos($string, 'a');
//$position is 0, but not a failure case,
if ($position !== false) {
    echo "The character 'a' is at position '{$position}'\n";
}

//change case of all letters to lower case
$lower = strtolower('FOOO!');
echo "{$lower}\n";

//change case of all letters to upper case
$upper = strtoupper('bar.');
echo "{$upper}\n";

//returns the number of occurrences of 'cd' within $string
$count = substr_count($string, 'cd');

echo "The string 'cd' occurs {$count} times in '{$string}'\n";

for ($i = 0;  $i < strlen($string); $i++) {
    echo "The character at position {$i} is {$string[$i]}\n";
}
