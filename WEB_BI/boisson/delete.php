<?php

$message = "";
$options = "";

include('database.php');

// Supprimer mes boissons

if (isset($_POST['drinkId'])) {
    
    $queryDelete = "DELETE FROM boisson WHERE id = :id";

    $obj = $pdo->prepare($queryDelete);
    $obj->execute(array(
        ":id" => $_POST['drinkId']
    ));

    if($obj) {
        $message = "<p class='success'>Le boisson a bien été supprimée.</p>";
    } else {
        $message = "<p class='error'>Il y a eu un problème lors de la suppression de la boisson.</p>";
    }

}

// Récupérer les boissons à afficher dans le select
$querySelect = "SELECT * FROM boisson";

$obj = $pdo->query($querySelect);
$boissons = $obj->fetchAll();

if($boissons) {
    foreach ($boissons as $boisson) {
        $options .= "<option value='" . $boisson['id'] ."'>" . $boisson['nom'] . "</option>";

        // -- autre façon de le faire (plus clair) --
        // $id = $boisson['id'];
        // $nom = $boisson['nom'];
        // $options .= "<option value='$id'>$nom</option>";
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

        <h1>Delete</h1>

        <form action="./delete.php" method="post">

            <label for="drinkId">Choisissez la boisson à supprimer :</label>
            <select name="drinkId" id="drinkId">
                <?= $options; ?>
            </select>

            <input type="submit" value="Delete">

        </form>

        <?= $message; ?>

    </div>


</body>

</html>