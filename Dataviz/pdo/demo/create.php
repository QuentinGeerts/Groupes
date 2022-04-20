<?php

require_once('connection.php');

$message = "";

if (isset($_POST['nom'])) {

    try {

        $query = "INSERT INTO boisson (nom) VALUES (:nom)";

        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ":nom" => trim($_POST['nom'])
        ));

        if ($obj) {
            $message = "La boisson s'est ajoutée correctement.";
        } else {
            $message = "Il y a eu une erreur lors de l'ajout de la boisson.";
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html>

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

    <h1>Création d'une boisson</h1>

    <form action="create.php" method="post">
        <input type="text" name="nom" id="nom" autofocus>
        <input type="submit" value="Créer">
    </form>

    <?= $message; ?>

</body>

</html>