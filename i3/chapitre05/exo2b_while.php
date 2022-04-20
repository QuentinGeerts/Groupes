<?php 
    // initialisation table
    $table = 1;
    // condition table
    while ($table <= 10) {
        // afficher la table par
        echo "La table de $table <br>";
        // -->initialisation multiplicateur<--
        $multiplicateur = 1;
        // conditon multiplicateur
        while ($multiplicateur <= 10) {
            // afficher le 1x1 = 1...
            echo "$table x $multiplicateur = " . ($table*$multiplicateur) . "<br>";
            // incrémenter le multiplicateur
            $multiplicateur++;
        }
        // incrémenter la table
        $table++;
    }

?>