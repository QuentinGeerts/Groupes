<?php

/* 
        À l’aide des boucles, réalisez un algorithme permettant de 
        trier un tableau d’entiers dans l’ordre croissant. Mettez-le 
        ensuite en pratique en PHP.
    */

$tab = array();

$min = 0;
$max = 10;

for ($i = $min; $i < $max; $i++) {
    // Générer un nombre aléatoire entre $min = 0 et $max = 10 (compris)
    $tab[] = rand($min, $max);
}

$avant = "";
$apres = "";

// Avant
foreach ($tab as $key => $value) {
    $avant .= "<td>$value</td>";
}

// Tri du tableau

for ($i = 0; $i < count($tab) - 1; $i++) {
    for ($j = $i + 1; $j < count($tab); $j++) {
        if ($tab[$i] > $tab[$j]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$j];
            $tab[$j] = $temp;
        }
    }
}


// Après
foreach ($tab as $key => $value) {
    $apres .= "<td>$value</td>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        
        table {
            border-collapse: collapse;
            text-align: center;
        }

        td {
            border: 1px solid black;
            width: 20px;
        }
    </style>
</head>

<body>
    <h2>Tri de tableau</h2>

    <h3>Avant:</h3>
    <table>
        <tr>
            <?= $avant; ?>
        </tr>
    </table>


    <h3>Après:</h3>
    <table>
        <tr>
            <?= $apres; ?>
        </tr>
    </table>

</body>

</html>