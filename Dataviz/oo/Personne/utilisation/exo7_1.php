<?php

// A notre méthode demanderEnMariage(), faites-en sorte de 
// que la personne ne puisse pas se demander en mariage elle-même.
// Résultat
// Veux-tu m'épouser Cléopatre ? Vous ne pouvez pas vous demander en mariage !

require_once('../models/Femme.php');
require_once('../models/Homme.php');

$jules = new Homme();
$jules->setNom('Jules');
$jules->setPrenom('César');

$cleopatre = new Femme();
$cleopatre->setNom('D\'Egypte');
$cleopatre->setPrenom('Cléopâtre');

$jules->demanderEnMariage($jules);      // PAS OK
$jules->demanderEnMariage($cleopatre);  // OK
