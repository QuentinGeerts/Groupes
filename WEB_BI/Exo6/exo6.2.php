<?php

/* 
        Initialiser un tableau de 10 entiers avec les valeurs 
        2, 4, 8, 16, 32, 64, 128, 256, 512, 1024 à l’aide d’une boucle. 
        Ensuite, à l’aide d’une boucle afficher la valeur de chaque cellule du tableau.

    */

$tabInt = [];
$result = "";
$valeur = 1;

while (count($tabInt) < 10) {
    $tabInt[] = $valeur * 2;
    $valeur *= 2;
}

foreach ($tabInt as $value) {
    $result .= "$value <br>";
}

// for ($i = 0; $i < count($tabInt); $i++) {
//     $result .= $tabInt[$i] . " <br>";
// }


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