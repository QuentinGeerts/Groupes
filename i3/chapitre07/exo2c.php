<?php 
    // déclaration
    function recherche($tab, $taille, $valeur)
    {
        if(array_search($valeur, $tab))
        {
            return array_search($valeur, $tab);
        }
        return -1;
    }

    // appeler
    $tableau = array(1, 4, 3, 5, 2);
    echo recherche($tableau, count($tableau), 3);
?>