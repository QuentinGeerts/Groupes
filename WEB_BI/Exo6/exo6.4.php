<?php

/* 
        Ecrivez un algorithme qui trouve qui est le nombre :
        - le plus grand
        - le plus petit
        dans un tableau de 5 données (1, 4, 3, 5, 2)
    */

$tab = array(1, 4, 3, 5, 2, 0, 56, 40, -12, 51);
$bigger = $tab[0];
$smaller = $tab[0];

for ($i = 0; $i < count($tab); $i++) {
    
    if ($tab[$i] > $bigger) {
        $bigger = $tab[$i];
    }

    if ($tab[$i] < $smaller) {
        $smaller = $tab[$i];
    }

    echo $tab[$i] . " ";
}

echo "<br> Le plus grand est $bigger";
echo "<br> Le plus petit est $smaller";

?>