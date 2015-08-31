<?php
// basic function
function doSomething($param, $anotherParam)
{
    echo "First Param is {$param}\n";
    echo "Second Param is {$anotherParam}\n";
}

//$result = doSomething('foo', 'bar');

//var_dump($result);

function doSomethingElse($param, $anotherParam)
{
    return "{$param} {$anotherParam}";
}

$result = doSomethingElse('foo', 'bar');
//var_dump($result);

//scope
$a = 1;

function increment($a)
{
    $a++;
}

increment($a);

//var_dump($a);

$b = null;
if (true) {
    $b = 'foo';
}

//var_dump($b);

//by reference
$a = 1;

function incByRef(&$paramToBeIncremented)
{
    $paramToBeIncremented++;
}

incByRef($a);

//var_dump($a);

//func_get_args

$default = 'BAR';

define('DEFAULT_PARAM', 'BAR');

function paramExample($a = 'BAR')
{
    var_dump($a);

    $arguments = func_get_args();

    foreach ($arguments as $key => $value) {
        echo "Argument {$key} was '{$value}'\n";
    }

}

//echo str_repeat('=', 20) . PHP_EOL;
//paramExample('foo', 'bar');

//echo str_repeat('=', 20) . PHP_EOL;
//paramExample();

//variable functions

function add($a, $b)
{
    return $a + $b;
}

$example = 'add';

$result = $example(1, 2);

//echo "{$result}\n";

//Anonymous functions

$multiplier = 2;

$add = function ($a, $b) use ($multiplier) {
    return ($a + $b) * $multiplier;
};

//echo "{$add(3, 4)}\n";

function addN()
{
    $result = 0;
    foreach (func_get_args() as $value) {
        $result += $value;
    }

    return $result;
}

echo addN(1, 2, 3) . "\n";
echo addN(1, 2) . "\n";
echo addN(1) . "\n";


