<?php
    // stocker une constant __ROOT__ la racine du site
    // chemin jusque /oo/
    define('__ROOT__', dirname(dirname(__FILE__)));
    // print_r(__ROOT__);
    // die;
    require_once(__ROOT__."/class/Homme.php");
    require_once(__ROOT__. "/class/Femme.php");
    $jules = new Homme();
    $cleopatre = new Femme();
    $cleopatre->setNom("D'Egypte");
    $cleopatre->setPrenom("Cléopatre");
    echo "<p>" . $jules->getPrenom(). " ". $jules->getNom() . " dit : </p>";
    $jules->demanderEnMariage($cleopatre);
?>