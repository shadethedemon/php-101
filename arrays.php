<?php
// array() syntax
$array = array('a', 'b', 'c');

//new array syntax
$array = ['a', 'b', 'c'];

//keys integer or strings
$array = ['a', 'b' => 'c', 'd'];

//non string indexes are casted to integers
$array = [
  '1' => 'a',
  1 => 'b',
  1.5 => 'c',
  true => 'd',
];

//setting values
$array = ['a', 'b', 'c'];

$array['foo'] = 'bar';
$array[3] = 'd';

$array[] = 'e';
$array[1] = 'B';

//array functions

$array = ['a', 'b', 'c'];
//var_dump(isset($array[3]));
$array[] = 'd';
//var_dump(isset($array[3]));

//var_dump(array_key_exists(4, $array));

$array = ['a', 'b', 'c'];
array_push($array, 'd');
//var_dump($array);
$value = array_pop($array);
//var_dump($array);

$array = ['a', 'b', 'c'];
array_unshift($array, 'z');
//var_dump($array);
array_shift($array);
//var_dump($array);

//implode/explode

$array = ['a', 'b', 'c'];

$string = implode(':', $array);

//echo "{$string}\n";

$array = explode('-', $string);

//var_dump($array);
//list

$input = 'Chad Gray';
list($first, $last) = explode(' ', $input);
//var_dump($first);
//var_dump($last);

$input = 'John Chadwick Gray';
list($first, $last) = explode(' ', $input);
//var_dump($first);
//var_dump($last);

$input = 'Chadicus';
list($first, $last) = explode(' ', $input) + [1 => null];
//var_dump($first);
//var_dump($last);

$a = [
    'a'=> 1,
    'c' => 2,
];

$b = [
    'b' => 2,
    'c' => 3,
];

$c = $a + $b;

//var_dump($c);

//multi-dimensional arrays

$array = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
];

//var_dump($array[1][2]);
$array = [
    'foo' => range('a', 'f'),
    'bar' => range(1, 5),
];

//var_dump($array['foo'][2]);

//iterating

$array = range('a', 'f');

foreach ($array as $key => $value) {
    echo "INDEX: {$key}\t VALUE: {$value}\n";
}

foreach ($array as &$value) {
    $value = 'B';
    echo "VALUE: {$value}\n";
}
var_dump($array);

$input = [
    ['Chad', 'Gray'],
    ['Sam', 'Smith'],
];

foreach ($input as $key => list($first, $last)) {
    //echo "KEY: {$key} FIRST: {$first} LAST: {$last}\n";
}

