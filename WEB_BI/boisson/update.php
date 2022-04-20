<?php

$message = "";
$options = "";

include('database.php');

// Modifier mes boissons
if (isset($_POST['drinkId'], $_POST['newName'])) {

    if (empty(trim($_POST['newName']))) {
        $message = "<p class='error'>Vous devez entrer un nom de boisson.</p>";
    } else {
        $queryUpdate = "UPDATE boisson SET nom = :nom WHERE id = :id";

        $obj = $pdo->prepare($queryUpdate);
        $obj->execute(array(
            ":id" => $_POST['drinkId'],
            ":nom" => trim($_POST['newName'])
        ));

        if($obj) {
            $message = "<p class='success'>Le boisson a bien été modifiée.</p>";
        } else {
            $message = "<p class='error'>Il y a eu un problème lors de la modification de la boisson.</p>";
        }
    }
}

// Récupérer les boissons à afficher dans le select
$querySelect = "SELECT * FROM boisson";

$obj = $pdo->query($querySelect);
$boissons = $obj->fetchAll();

if ($boissons) {
    foreach ($boissons as $boisson) {
        $options .= "<option value='" . $boisson['id'] . "'>" . $boisson['nom'] . "</option>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Read</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('menu.php'); ?>

    <?= $status; ?>

    <div class="container">

        <h1>Update</h1>

        <form action="./update.php" method="post">

            <label for="drinkId">Choisissez la boisson à supprimer :</label>
            <select name="drinkId" id="drinkId">
                <?= $options; ?>
            </select>

            <label for="newName">Nouveau nom de la boisson :</label>
            <input type="text" name="newName" id="newName">

            <input type="submit" value="Update">

        </form>

        <?= $message; ?>

    </div>


</body>

</html>