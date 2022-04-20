<?php

$a = 5;
$b = 7;

echo "a = " . $a . " b = " . $b . "<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "a = " . $a . " b = " . $b;

?>