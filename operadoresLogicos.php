<?php

$a = true;
$b = false;

var_dump($a && $b); // bool(false)
echo "<br>";
var_dump($a || $b); // bool(true)
echo "<br>";
var_dump(!$a);      // bool(false)
echo "<br>";
var_dump($a xor $b); // bool(true)
echo "<br>";
var_dump($a && !$b); // bool(true)