<?php

/* 
        Ecrivez un algorithme qui calcule la moyenne des valeurs du tableau
    */


$tab = array(1, 4, 3, 5, 2, 0, 56, 40, -12, 51);
$sum = 0;

foreach ($tab as $value) {
    $sum += $value;
}

echo "La moyenne du tableau vaut :" . ($sum / count($tab));
