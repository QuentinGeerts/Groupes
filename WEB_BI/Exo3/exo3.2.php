<?php

$a = true;
$b = false;

// Vrai
echo "<p>1." . ($a || $b && $b) . "</p>";
// Faux
echo "<p>2." . ($a || $b and $b). "</p>";
// Faux
echo "<p>3." . ($b and $a || $a). "</p>";
// Vrai
echo "<p>4." . ($b and $a or $a). "</p>";
// Vrai
echo "<p>5." . ($b || $a). "</p>";
// Vrai
echo "<p>6." . ($b or $a). "</p>";
// Faux
echo "<p>7." . ($a && $b). "</p>";
// Faux
echo "<p>8." . ($a and $b). "</p>";
// Vrai
echo "<p>9." . ($b || $a && $b || $a && !$b). "</p>";

?>