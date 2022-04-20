<?php

// $nomTableau = array();


// $tab = [2, 1];
// $tab[3] = 3;

// print_r($tab);

// // var_dump($tab)

// echo count($tab) . "<br>";
// echo sizeof($tab) . "<br>";

// for($cpt = 0; $cpt < sizeof($tab) ; $cpt ++) {
//     echo $tab[$cpt] . " ";
// }
// echo '[';
// foreach($tab as $element) {
//     echo $element . ' ';
// }
// echo ']';


$tab[0] = 4;
$tab[1] = 2;
$tab[2] = 10;
// indice 3-4-5 pas de valeur
$tab[6] = 78;
$tab[] = 12;

print_r($tab);

$tableau = array(4, 2, 10) ;
$tableau2 = [4, 2, 10];

echo count($tableau);
echo sizeof($tableau);