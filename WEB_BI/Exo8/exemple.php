<?php

// ----------------------------------------

// Function -> Return
function bonjour($nomUtilisateur) {
    return "Bonjour " . $nomUtilisateur;
}

// Procédure -> pas de return
function direBonjour($nom) {
    echo "Bonjour " . $nom;
}

// UTILISATION

$nom = 'Quentin';
// $bonjour = bonjour('Quentin');
$bonjour = bonjour($nom);
echo $bonjour;
