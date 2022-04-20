<?php 
    include("../class/Personne.php");

    $p1 = new Personne();
    $p1->parler("Bonjour");
    $p1->sePresenter();
    $p1->nom = "D'Egypte";
    $p1->prenom = "Cléopâtre";
?>