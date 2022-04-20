<?php
// Importer la classe Femme
require_once("../models/Femme.php");

// Création de la femme
$f = new Femme();

// Vérifier si enceinte
echo $f->getEnceinte();

// Mettre enceinte
$f->setEstEnceinte(true);

// Vérifier si enceinte
echo $f->getEnceinte();

$f->accoucher();

// Vérifier si enceinte
echo $f->getEnceinte();

?>