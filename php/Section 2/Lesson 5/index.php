<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;

$result = $number1 + $number2;
$result1 = $number1 + $number3;
$result2 = $number3 . $number3;
$result3 = $number3 + $number3;
$result4 = $number1 . $number2;
// $result5 = $number1 + $fruit; tak już się nie dał !!BŁĄD!!
$result5 = $bool1 + $number1; // true to tak na prawdę 1 więc ją dodaje
$result6 = $bool2 + $number1; // false = 0 
$result7 = $number1 + null; // null = 0 

// Explicing
$result8 = (string) $number1;
$result9 = (int) $number3;
$result10 = (bool) $number1;


var_dump($result);
echo '<br />';
var_dump($result1);
echo '<br />';
var_dump($result2);
echo '<br />';
var_dump($result3);
echo '<br />';
var_dump($result4);
echo '<br />';
var_dump($result5);
echo '<br />';
var_dump($result6);
echo '<br />';
var_dump($result7);
echo '<br />';
var_dump($result8);
echo '<br />';
var_dump($result9);
echo '<br />';
var_dump($result10);