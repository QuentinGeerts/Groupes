<?php

$message = "";

include('database.php');

// Créer mes boissons

if (isset($_POST['nom'])) {

    try {
        if (trim($_POST['nom']) == "") {
            $message = "<p class='error'>Vous devez remplir le nom de la boisson.</p>";
        } else {

            $query = "INSERT INTO boisson (nom) VALUES (:nom)";

            $obj = $pdo->prepare($query);
            $obj->execute(array(
                ":nom" => trim($_POST['nom'])
            ));

            // var_dump($obj);

            if ($obj) {
                $message = "<p class='success'>La boisson a bien été ajoutée.</p>";
            } else {
                $message = "<p class='error'>Il y a eu un problème lors de l'ajout de la boisson.</p>";
            }
        }
    } catch (PDOException $e) {
        $status = "<p id='status' class='error'>Error : " . $e->getMessage() . "</p>";
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

        <h1>Create</h1>

        <form action="./create.php" method="post">

            <label for="nom">Entrez le nom de la boisson : </label>
            <input type="text" name="nom" id="nom" autofocus>

            <input type="submit" value="Create">

        </form>

        <?= $message; ?>

    </div>


</body>

</html>