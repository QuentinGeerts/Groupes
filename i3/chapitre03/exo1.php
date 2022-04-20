<?php
$a = 3;
$b = 9;
$c = false;
$d = !($c);
$e = 9;

// 1
echo "1." . ($a > 8) . "<br>";
// $a > 8
// 3 > 8
// false

//2
echo "2." . ($b == 9) . "<br>";
// ($b == 9)
// (9 == 9)
// true

// 3
echo "3." . (!($a != 3)) . "<br>";
// !($a != 3)
// !(3 != 3)
// !(false)
// true


// 4
echo "4." . !($c) . "<br>";
// !($c)
// !(false)
// true

// 5
echo "5." . (($a < $b) || $c) . "<br>";
// ($a < $b) || $c
// (3 < 9) || false
// true || false
// true

// 6
echo "6." . (!(($a + $b) != 12)) . "<br>";
// !(($a + $b) != 12)
// !((3 + 9) != 12)
// !(12 != 12)
// !(false)
// true

// 7
echo "7." . (($b == 5) || (($e > 10) && ($a < 8))) . "<br>";
// (($b == 5) || (($e > 10) && ($a < 8)))
// ((9 == 5) || ((9 > 10) && (3 < 8)))
// (false || (false && true))
// (false || false)
// false

// 8
echo "8." . (((($b == 5) || (($e > 10) && ($a < 8))) || ($a < $b) || $c) && $c) . "<br>";
// (((9 == 5) || ((9 > 10) && (3 < 8))) || (3 < 9) || false) && false
// ((false || (false && true)) || true || false) && false
// ((false || false) || true || false) && false
// (false || true || false) && false
// true && false
// false

// 9 
echo "9." . ($a != 3). "<br>";
// $a != 3
// 3 != 3
// false

// 10
echo "10." . (!($d) || $c). "<br>";
// !($d) || $c
// !(true) || false
// false || false
// false

// 11
echo "11." . ((($a + $b) == 12) && $d) . "<br>";
// (($a + $b) == 12) && $d
// ((9 + 3) == 12) && true
// (12 == 12) && true
// true && true
// true

$a = true;
$b = false;

//12
echo "12." . ($a || $b && $b) . "<br>";
// $a || $b && $b
// true || false && false
// true || false
// true

// 13
echo "13." . ($a || $b and $b) ."<br>";
// $a || $b and $b
// true || false and false
// true and false
// false

// 14 
echo "14." . ($b and $a || $a) . "<br>";
// $b and $a || $a
// false and true || true
// false and true
// false

// 15
echo "15." . ($b and $a or $a) ."<br>";
// $b and $a or $a
// false and true or true
// false or true
// true

// 16
$f = $b || $a;
echo "16." . $f . "<br>";
// $f = $b || $a
// $f = false || true
// ||
// $f = true
// true

//17
$g = $b or $a;
echo "17." . $g . "<br>";
// $g = $b or $a
// $g =false or true
// =
// $g = false

// 18
$h = $a && $b;
echo "18." . $h . "<br>";
// $h = $a && $b
// $h = true && false
// &&
// $h = false


// 19
$i = $a and $b;
echo "19." . $i . "<br>";
// $i = true and false
// =
// $i = true

// 20
echo "20." . ($b || $a && $b || $a && !$b) ."<br>";
// $b || $a && $b || $a && !$b
// false || true && false || true && !false
// false || true && false || true && true
// false || (true && false) || (true && true)
// false || false || true
// true










?>