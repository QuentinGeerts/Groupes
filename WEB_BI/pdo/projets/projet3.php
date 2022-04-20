<?php

/*
        À l’aide des boucles, réalisez un algorithme permettant de trier 
        un tableau d’entiers dans l’ordre croissant. Mettez-le ensuite
        en pratique en PHP.
        Ce projet est en lien avec les exercices 6.7 et 6.9
    */

$table = "";
$options = "";
$nbDays = "";

$months = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
    'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];

$days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

// Générer le tableau et les options
foreach ($months as $index => $month) {
    $table .= "<tr><td>$month</td><td>" . $days[$index] . "</td></tr>";
    // $options .= "<option value='$index'"; 

    // if ($_GET['selectedMonth'] && $_GET['selectedMonth'] == $index) {
    //     $options .= " selected";
    // }

    // $options .= ">$month</option>";

    $options .= "<option value='$index'";
    $options .= (isset($_GET['selectedMonth']) && $_GET['selectedMonth'] == $index ? ' selected' : '');
    $options .= ">$month</option>";
}

if (isset($_GET['selectedMonth'])) {
    $nbDays = $days[$_GET['selectedMonth']];
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projet 3</title>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 90%;
        }

        div {
            width: 48%;
            min-height: 100%;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid black;
            text-align: center;
        }

        .gauche {
            float: left;
        }

        .droite {
            float: right;
        }

        form {
            display: flex;
            justify-content: space-around;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        th,
        td {
            border: 1px solid black;
            width: 70%;
        }

        th {
            background: #aaa;
        }

        tr:nth-child(odd) {
            background: #ddd;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>

    <h1 class="center">Le calendrier</h1>

    <div class="gauche">
        <h2>Voici le calendrier avec le nombre de jours par mois</h2>

        <table>
            <thead>
                <tr>
                    <th>Mois de l'année</th>
                    <th>Jours par mois</th>
                </tr>
            </thead>

            <tbody>
                <!-- les différentes lignes du tableau -->
                <?= $table ?>
            </tbody>
        </table>
    </div>
    <div class="droite">
        <h2>Rechercher le nombre de jours par mois :</h2>

        <form action="./projet3.php" method="get">

            <select name="selectedMonth" id="month">
                <!-- Options générées-->
                <?= $options; ?>
            </select>

            <input type="submit" value="Rechercher">

            <p>
                <!-- Nb jours du mois -->
                <?= $nbDays; ?>
            </p>

        </form>


    </div>

</body>

</html>