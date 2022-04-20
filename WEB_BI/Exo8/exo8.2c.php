<?php

/*
    Réalisez une fonction de recherche dans un tableau. 
    Cette fonction va recevoir un tableau, la taille du
    tableau et la valeur recherchée en paramètres et renvoyer 
    l’indice de l’élément dans le tableau. Si l’élément ne s’y 
    trouve pas, la fonction renvoie -1.
*/

function recherche($tab, $taille, $valeur)
{
    if(in_array($valeur, $tab)) {
        return array_search($valeur, $tab);
    }

    return -1;
}

$tableau = array(10, 4, 6, 1, 3, 7, 1, 9);
$length = sizeof($tableau);
$valeurARechercher = 1;
$result = recherche($tableau, $length, $valeurARechercher);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?= $result; ?>
</body>

</html>