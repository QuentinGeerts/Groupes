<?php 
    // initialisation table
    $table = 1;
    // condition table
    do {
        // afficher la table par
        echo "La table de $table <br>";
        // -->initialisation multiplicateur<--
        $multiplicateur = 1;
        // conditon multiplicateur
        do {
            // afficher le 1x1 = 1...
            echo "$table x $multiplicateur = " . ($table*$multiplicateur) . "<br>";
            // incrémenter le multiplicateur
            $multiplicateur++;
        }while ($multiplicateur <= 10);
        // incrémenter la table
        $table++;
    } while ($table <= 10);

?>