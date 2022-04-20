<?php

/*
    Créer deux poissons :
    - poisson1, gris, 10 kg
    - poisson2, rouge, 7 kg
    Afficher leur poids puis le poisson1 mange le poisson2.
    Réafficher leur poids.
    
    Résultat
    Le poids du poisson1 est : 10 kg
    Le poids du poisson2 est : 7 kg
    Le poisson1 mange le poisson2
    Le nouveau poids du poisson1 est : 17 kg
    Le nouveau poids du poisson2 est : 0 kg
*/

require_once('Poisson.php');

$p1 = new Poisson("poisson1", "gris", 10);
$p2 = new Poisson("poisson2", "rouge", 7);

$p1->sePresenter();
$p2->sePresenter();

$p1->manger($p2);

$p1->sePresenter();
$p2->sePresenter();

?>