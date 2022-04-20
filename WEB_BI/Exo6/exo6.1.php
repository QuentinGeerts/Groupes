<?php

/* 
        Écrire un algorithme qui enregistre 6 entiers et les stocke dans un tableau, 
        puis affiche le contenu de ce tableau une fois qu’il est rempli.
    */
$result = "";
$tabInt = [15, 23, 48, 15, 12, 37];

foreach ($tabInt as $index => $int) {
    $result .= "$int à l'indice $index <br>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?= $result ; ?>
</body>

</html>