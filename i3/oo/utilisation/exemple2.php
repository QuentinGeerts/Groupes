<?php 
    include("../class/Homme.php");    
    $h1 = new Homme();
    $h1->sePresenter();
    echo "<p>Ma barbe fait : " . $h1->getLongueurBarbe() . " cm</p>";
    $h1->seRaser();
    echo "<p>Ma barbe fait : " . $h1->getLongueurBarbe() . " cm</p>";

    $h1->jeSuis();

    // echo $h1->nom;

    // changer de nom
    $h1->setNom("Albert");

    // afficher son nouveau nom
    echo "<p>" . $h1->getNom() . "</p>";
?>