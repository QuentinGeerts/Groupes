<?php

include('../models/Personne.php');

// Création d'une personne
$p1 = new Personne();
$p1->parler("Bonjour");
$p1->sePresenter();
$p1->donnerAge();

// Modification
// $p1->nom = "Geerts";
// $p1->prenom = "Quentin";
// $p1->dateNaissance = "1996-04-03";
$p1->setNom("Geerts");
$p1->setPrenom("Quentin");
$p1->setDateNaissance("1996-04-03");

$p1->sePresenter();
$p1->donnerAge();

// Création d'une seconde personne
$p2 = new Personne();
// $p2->nom = "D'Egypte";
// $p2->prenom = "Cléopâtre";
$p2->setNom("D'Egypte");
$p2->setPrenom("Cléopâtre");
$p2->sePresenter();
$p2->donnerAge();

// echo $p2->getNom();


?>