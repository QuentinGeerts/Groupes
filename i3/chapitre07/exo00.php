<?php 
    // $tab = array("1", "a", "r");

    // // connecter
    // // récuperer la liste de produits
    // // vérfier le contenu du tableau
    
    // print_r($tab);
    // 09/09/2020
    echo "<h2> exemple</h2>";
    echo date("d/m/Y");
    // EXO 1
    //  09/09/2020 11:43:54
    echo "<h2> exo1</h2>";
    echo date("d/m/Y H:i:s");
    // EXO2
    echo "<h2> exo2</h2>";
    // Nous sommes mercredi
    $tabJours = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
    $numJour = date("w");
    echo "Nous sommes " . $tabJours[$numJour];

    // EXO3
    echo "<h2> exo3</h2>";
    $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    // Nous sommes au mois de septembre et il y a 30 jours dans ce mois
    $numMois = date("n")-1;
    echo "Nous sommes au mois de " . $tabMois[$numMois] . " et il y a " .date("t")." jours dans ce mois";




?>