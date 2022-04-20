
<?php

/* 
        Ecrivez un algorithme qui affiche le nombre de jour par mois. 
    */

$months = [
    "Janvier" => 31,
    "Février" => 29,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31,

];

foreach ($months as $month => $nbDays) {
    echo "Le mois de $month possède $nbDays jours.<br>";
}