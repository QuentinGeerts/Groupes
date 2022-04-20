<?php

/*
        À l’aide des boucles, réalisez un algorithme permettant de trier 
        un tableau d’entiers dans l’ordre croissant. Mettez-le ensuite
        en pratique en PHP.
        Ce projet est en lien avec les exercices 6.3 à 6.6. 
    */

$selectedMin = "";
$selectedMax = "";
$selectedSum = "";
$selectedAvg = "";

$table = "";
$result = "Résultat : ";

$tab = array(1, 4, 3, 5, 2);

foreach ($tab as $value) {
    $table .= "<td>$value</td>";
}

if (isset($_GET['choice'])) {

    switch ($_GET['choice']) {

        case 'max':
            $result .= "Max = " . max($tab);
            $selectedMax = "selected";
            break;
        case 'min':
            $result .= "Min = " . min($tab);
            $selectedMin = "selected";
            break;
        case 'sum':
            $result .= "Somme = " . array_sum($tab);
            $selectedSum = "selected";
            break;
        case 'avg':
            $result .= "Moyenne = " . (array_sum($tab) / count($tab));
            $selectedAvg = "selected";
            break;
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projet 1</title>

    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        td {
            border: 1px solid black;
            width: 45px;
        }

        form>* {
            margin: 15px 0;
        }
    </style>

</head>

<body>

    <h1>Projet 1</h1>

    <table>
        <tr>
            <!-- Tableau généré -->
            <?= $table; ?>
        </tr>
    </table>

    <form action="./projet1.php" method="get">
        <select name="choice" id="">
            <option value="max" <?= $selectedMax; ?>>Plus grand</option>
            <option value="min" <?= $selectedMin; ?>>Plus petit</option>
            <option value="sum" <?= $selectedSum; ?>>Somme</option>
            <option value="avg" <?= $selectedAvg; ?>>Moyenne</option>
        </select>

        <input type="submit" value="Rechercher">
    </form>

    <p>
        <?= $result; ?>
    </p>

</body>

</html>