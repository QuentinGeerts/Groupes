<?php

require_once('connection.php');

$options = "";
$message = "";

if (isset($_POST['choix'])) {

    $query = "DELETE FROM boisson WHERE id = :id";

    $obj = $pdo->prepare($query);
    $obj->execute(array(
        ":id" => $_POST['choix']
    ));

    if($obj) {
        $message = "La boisson a bien été supprimée.";
    } else {
        $message = "Il y a eu un problème lors de la suppression.";
    }

}

// Récupération des différentes boissons
$query = "SELECT * FROM boisson";
$obj = $pdo->query($query);

$boissons = $obj->fetchAll();

foreach ($boissons as $boisson) {
    $options .= "<option value='{$boisson['id']}'>{$boisson['nom']}</option>";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
    require_once('menu.php');
    
    ?>

    <h1>Delete</h1>

    <form action="delete.php" method="post">
        <label for="choix">Choisissez la boisson à supprimer</label>
        <select name="choix" id="choix">
            <!-- Options -->
            <!-- <option value="id">nom</option> -->
            <?= $options; ?>
        </select>

        <input type="submit" value="Supprimer">
    </form>

    <?= $message; ?>
</body>

</html>