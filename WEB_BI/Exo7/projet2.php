<?php

/*
        À l’aide des boucles, réalisez un algorithme permettant de trier 
        un tableau d’entiers dans l’ordre croissant. Mettez-le ensuite
        en pratique en PHP.
        Ce projet est en lien avec les exercices 6.7 à 6.8.
    */

$monthsRows = "";
$checkASC = "checked";
$checkDESC = "";

$months = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
    'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];

if (isset($_GET['order'])) {

    // if ($_GET['order'] == 'DESC') {
    //     $monthsRows = "";
    //     for ($i = count($months) - 1; $i >= 0; $i--) {
    //         $monthsRows .= "<tr><td>" . $months[$i] . "</td></tr>";
    //     }
    // }

    if ($_GET['order'] == 'DESC') {
        $months = array_reverse($months);
        $checkDESC = "checked";
        $checkASC = "";
    }
}

foreach ($months as $month) {
    $monthsRows .= "<tr><td>$month</td></tr>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projet 2</title>

    <style>
        form>* {
            margin: 15px 0;
        }

        label {
            margin: 0 20px 0 2px;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
        }

        th {
            background: #999;
        }

        tr:nth-child(odd) {
            background: lightgray;
        }
    </style>
</head>

<body>

    <h1>Le calendrier</h1>
    <h2>Dans quel ordre souhaitez-vous qu'il s'affiche ?</h2>

    <form action="./projet2.php" method="get">

        <input type="radio" name="order" value="ASC" id="ASC" <?= $checkASC ?>>
        <label for="ASC">Chronologique</label>

        <input type="radio" name="order" value="DESC" id="DESC" <?= $checkDESC ?>>
        <label for="DESC">Inverse</label>

        <input type="submit" value="Valider">
    </form>

    <table>
        <thead>
            <tr>
                <th>Mois de l'année</th>
            </tr>
        </thead>

        <tbody>
            <?= $monthsRows; ?>
        </tbody>
    </table>

</body>

</html>