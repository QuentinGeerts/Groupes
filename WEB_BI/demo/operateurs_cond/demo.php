<?php

// echo (10 == 10); // VRAI (true)
// echo (10 == 9); // FAUX

// echo (10 >= 10); // VRAI
// echo (10 <= 10); // VRAI


$pointsJean = 15 ;
$pointsPaul = 9 ;
$reussiteJean = ($pointsJean >= 10) ; // true
$reussitePaul = ($pointsPaul >= 10) ; // false

// echo "Jean : " . $reussiteJean;
// echo "Paul : " . $reussitePaul;


// echo (true AND true);
echo ($reussitePaul OR $reussiteJean); 

?>