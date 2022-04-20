<?php

/*
        Calculatrice
        Réaliser l’algorithme d’une calculatrice basique. 
        L’utilisateur est invité à saisir un nombre, un opérateur 
        et un deuxième nombre. La calculatrice affiche ensuite le résultat.
    */

$nb1 = "";
$nb2 = "";
$result = "";

$selectedPlus = "";
$selectedMoins = "";
$selectedFois = "";
$selectedDiv = "";

if (
    isset($_POST['nb1']) &&
    isset($_POST['operator']) &&
    isset($_POST['nb2'])
) {

    $nb1 = $_POST['nb1'];
    $operator = $_POST['operator'];
    $nb2 = $_POST['nb2'];

    if ($nb1 != "" && $nb2 != "" && !is_nan($nb1) && !is_nan($nb2)) {
        // Calculer
        switch ($operator) {
            case '+':
                $result = $nb1 + $nb2;
                $selectedPlus = "selected";
                break;
            case '-':
                $result = $nb1 - $nb2;
                $selectedMoins = "selected";
                break;
            case '*':
                $result = $nb1 * $nb2;
                $selectedFois = "selected";
                break;
            case '/':
                if ($nb2 == 0) {
                    $result = "Division par 0 est impossible";
                } else {
                    $result = $nb1 / $nb2;
                }
                $selectedDiv = "selected";
                break;
            default:
                $result = "Opérateur non reconnu";
                break;
        }
    } else {
        $result = "Entrez une valeur";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
    <style>
        form>* {
            display: block;
            margin: 15px 0;
        }
    </style>
</head>

<body>

    <h2>Calculatrice</h2>

    <form action="./exo4.4.php" method="POST">
        <input type="number" name="nb1" id="nb1" value="<?= $nb1; ?>">
        <select name="operator" id="operator">
            <option value="+" <?= $selectedPlus ?>>+</option>
            <option value="-" <?= $selectedMoins ?>>-</option>
            <option value="*" <?= $selectedFois ?>>*</option>
            <option value="/" <?= $selectedDiv ?>>/</option>
        </select>
        <input type="number" name="nb2" id="nb2" value="<?= $nb2; ?>">

        <input type="text" name="result" id="result" value="<?= $result; ?>" disabled>

        <input type="submit" value="Calculer">
    </form>

</body>

</html>