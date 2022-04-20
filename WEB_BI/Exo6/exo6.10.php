<?php

/* 
        Voici les températures maximales pour le mois de septembre :
        - enregistrer les données dans le tableau
        - afficher la date suivie de la température
        EX:
        1 septembre : 20°C
        2 septembre : 20°C
    */

$septembre = [
    1 => 20, 2 => 24, 3 => 17, 4 => 19, 5 => 20, 6 => 23, 7 => 20, 
    8 => 24, 9 => 17, 10 => 19, 11 => 20, 12 => 23, 13 => 20, 14 => 24, 
    15 => 17, 16 => 19, 17 => 20, 18 => 23, 19 => 20, 20 => 24, 21 => 17, 
    22 => 19, 23 => 20, 24 => 23, 25 => 20, 26 => 24, 27 => 17, 28 => 19, 
    29 => 20, 30 => 23
];

foreach ($septembre as $jour => $temperature) {
    echo "$jour septembre : $temperature °C <br>";
}


