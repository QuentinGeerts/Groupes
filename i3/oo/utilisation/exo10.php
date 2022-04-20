<?php 
    // importer la classe
    require_once("../class/Poisson.php");
    // Construire 
    //poisson1, gris, 10 kg
    $p1 = new Poisson("poisson1", "gris", 10);
    // poisson2, rouge, 7 kg
    $p2 = new Poisson("poisson2", "rouge", 7);

    // Le poids du poisson1 est : 10 kg
    $p1->sePresenter();
    // Le poids du poisson2 est : 7 kg
    $p2->sePresenter();
    // Le poisson1 mange le poisson2
    $p1->manger($p2);
    // Le nouveau poids du poisson1 est : 17 kg
    $p1->sePresenter();
    // Le nouveau poids du poisson2 est : 0 kg
    $p2->sePresenter();
?>