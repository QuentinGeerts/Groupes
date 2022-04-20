<?php 
    // A notre méthode demanderEnMariage(), faites-en sorte de que la personne ne puisse pas se demander en mariage elle-même
    define('__ROOT__', dirname(dirname(__FILE__)));
    // print_r(__ROOT__);
    // die;
    require_once(__ROOT__."/class/Homme.php");
    require_once(__ROOT__. "/class/Femme.php");
    $jules = new Homme();
    $cleopatre = new Femme();
    $cleopatre->setNom("D'Egypte");
    $cleopatre->setPrenom("Cléopatre");
    $jules->demanderEnMariage($jules);
?>