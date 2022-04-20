<?php 
    // déclaration
    function recherche($tab, $taille, $valeur)
    {
        $indice = -1;
        for ($i=0; $i < $taille && $indice == -1; $i++) { 
            if($valeur == $tab[$i])
            {
                $indice =  $i;            
            }
        }
        return $indice;
    }

    // appeler
    $tableau = array(3, 4, 3, 5, 2);
    echo recherche($tableau, count($tableau), 3);
?>