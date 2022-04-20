<?php

/* 
        Ecrivez un algorithme qui contient un tableau avec 
        les mois de l'année et qui les affichent dans l'ordre
        inverse (décembre, novembre, ...)
    */

$months = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
    'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];

for ($i = count($months) - 1; $i >= 0; $i--) {
    echo $months[$i] . "<br>";
}
