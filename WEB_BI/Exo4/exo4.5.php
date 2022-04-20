<?php
/*
        Appréciations
        Ecrire un algorithme qui écrit une appréciation en fonction 
        des points des étudiants.
        Notes :
            < 10 : I
            10-12 : S
            13-15 : B
            16-18 : TB
            >= 19 : Excellent
    */

$result = "";
$note = "";
$style = "";

if (isset($_POST['note'])) {

    $note = $_POST['note'];

    if ($note >= 0 && $note <= 20 && $note != "") {

        if ($note < 10) {
            $result = "La note $note correspond à I.";
            $style = "style='color: orange'";
        } elseif ($note >= 10 && $note <= 12) {
            $result = "La note $note correspond à S.";
            $style = "style='color: yellow'";
        } elseif ($note >= 13 && $note <= 15) {
            $result = "La note $note correspond à B.";
            $style = "style='color: lightgreen'";
        } elseif ($note >= 16 && $note <= 18) {
            $result = "La note $note correspond à TB.";
            $style = "style='color: green'";
        } else {
            $result = "La note $note correspond à Excellent.";
            $style = "style='color: blue'";
        }
    } else {
        $result = "Entrez une note comprise entre 0 et 20.";
        $style = "style='color: red'";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Appréciations</title>

    <style>
        form>* {
            display: block;
            margin: 15px 0;
        }
    </style>
</head>

<body>

    <h2>Appréciations</h2>

    <form action="./exo4.5.php" method="post">
        <label for="note">Entrez la note de l'étudiant</label>
        <input type="number" name="note" id="note" value="<?= $notes; ?>">

        <input type="submit" value="Tester">
    </form>

    <p <?= $style; ?>><?= $result; ?></p>

</body>

</html>