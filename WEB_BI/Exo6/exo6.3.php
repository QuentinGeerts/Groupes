<?php

/* 
        Ecrivez un algorithme qui trouve qui est le nombre le plus grand 
        dans un tableau de 5 données (1, 4, 3, 5, 2)
    */

$tab = array(1, 4, 3, 5, 2);
$taller = $tab[0];

for ($i = 0; $i < count($tab); $i++) {

    if ($tab[$i] > $taller) {
        $taller = $tab[$i];
    }

    echo $tab[$i] . " ";
}

echo "<br> Le plus grand est $taller";
