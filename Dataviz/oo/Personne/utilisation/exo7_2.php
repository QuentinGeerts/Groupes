<?php

// Faire en sorte que si une personne reçoit une demande 
// en mariage, la personne demandée puisse répondre à la demande.
// Si la réponse est oui, ils seront tous les deux fiancés.

require_once('../models/Femme.php');
require_once('../models/Homme.php');

// Créer Jules
$jules = new Homme();
$jules->setNom('Jules');
$jules->setPrenom('César');
$jules->setSexe('H');

// Créer Cléopatre
$cleopatre = new Femme();
$cleopatre->setNom('D\'Egypte');
$cleopatre->setPrenom('Cléopâtre');
$cleopatre->setSexe('F');
// $cleopatre->setFiance(true);

// Demande en mariage
$jules->demanderEnMariage($cleopatre);
$cleopatre->repondreDemandeMariage($jules, "non");

// États
$jules->getFiancePhrase();
$cleopatre->getFiancePhrase();

?>