<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

$str = "napis";
$str2 = 'napis2';
var_dump($str);
echo "<br/>";

$int = 35;
var_dump($int);
echo "<br/>";

$float = 3.5;
var_dump($float);
echo "<br/>";

$bool = true;
var_dump($bool);
echo "<br/>";

$arr = ['john', 'jack', 'jane',5];
var_dump($arr);
echo "<br/>";

//Object
$person = new stdClass();
var_dump($person);
echo "<br/>";


$null = null;
var_dump($null);
echo "<br/>";

$resource = fopen("phpTest.txt", 'r');
var_dump($resource);
