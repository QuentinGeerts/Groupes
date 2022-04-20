<?php
$a = 8 % 3 ;
// 2
$b = 4 + $a ;
// 6
$c = $b * $a ;
// 12
$d = ($c - $a) * $b ;
// 60
$e = (($a + 7) * ($d / $a)) * 0 ;
// 0

echo "<p>a=$a</p>";
echo "<p>b=$b</p>";
echo "<p>c=$c</p>";
echo "<p>d=$d</p>";
echo "<p>e=$e</p>";
?>