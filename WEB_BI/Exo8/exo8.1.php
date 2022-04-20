<?php

/*
    Réalisez une fonction calculant le carré d’un nombre 
    entier donné en paramètre.
*/

function carre($nb) {
    return $nb * $nb;
}

$result = carre(12);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?= $result; ?>
</body>
</html>