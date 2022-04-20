<?php

require_once('connection.php');

$message = "";
$options = "";

if (isset($_POST['id'], $_POST['nouveauNom'])) {

    $query = "  UPDATE boisson 
                SET nom = :nom
                WHERE id = :id
                ";

    $obj = $pdo->prepare($query);
    $obj->execute(array(
        ":id" => $_POST['id'],
        ":nom" => trim($_POST['nouveauNom'])
    ));

    if ($obj) {
        $message = "La boisson a bien été modifiée.";
    } else {
        $message = "Il y a eu un problème lors de la modification.";
    }
}

// Récupérer nos boissons
$query = "SELECT * FROM boisson";
$obj = $pdo->query($query);
$boissons = $obj->fetchAll();

foreach ($boissons as $boisson) {
    $options .= "<option value='{$boisson['id']}'>{$boisson['nom']}</option>";
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

    require_once('menu.php')

    ?>
    <h1>Update</h1>

    <form action="update.php" method="POST">

        <label for="id">Choisissez la boisson à modifier :</label>
        <select name="id" id="id">
            <!-- <option value="id">nom</option> -->
            <?= $options; ?>
        </select>

        <input type="text" name="nouveauNom" id="nouveauNom">
        <input type="submit" value="Modifier">

    </form>

    <?= $message; ?>

</body>

</html>