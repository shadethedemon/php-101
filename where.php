<?php

$index = isset($argv[1]) ? $argv[1] : die("No input given\n");
$value = isset($argv[2]) ? $argv[2] : die("No input given\n");
$books = require_once __DIR__ . '/books.php';

/**
 * Exercise 4 - Write a script that will search the books array and find all entries where the field specified by $index
 * has the value of $value. Echo the id and title of each book that matches the given criteria.
 */


