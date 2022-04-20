<?php 
    // déclaration
    function recherche($tab, $taille, $valeur)
    {
        for ($i=0; $i < $taille; $i++) { 
            if($valeur == $tab[$i])
            {
                return $i;
            }
        }
        return -1;
    }

    // appeler
    $tableau = array(1, 4, 3, 5, 2);
    echo recherche($tableau, count($tableau), 6);
?>