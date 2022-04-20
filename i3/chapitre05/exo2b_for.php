<?php 
     
    // intitilisation;condition; incrementation pour table
    for ($table = 1;$table <= 10;$table++) {
        // afficher la table par
        echo "La table de $table <br>";
        
        
        // intitilisation;condition; incrementation pour multiplicateur
        for ($multiplicateur = 1;$multiplicateur <= 10;$multiplicateur++) {
            // afficher le 1x1 = 1...
            echo "$table x $multiplicateur = " . ($table*$multiplicateur) . "<br>";          
            
        }
        
    }

?>