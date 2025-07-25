<?php

$num1 = 5;
$num2 = "5";
$num3 = 8;

var_dump($num1 == $num2);  // bool(true)
echo "<br>";
var_dump($num1 === $num2); // bool(false)
echo "<br>";
var_dump($num1 != $num3);  // bool(true)
echo "<br>";
var_dump($num1 < $num3);   // bool(true)
?>