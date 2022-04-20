<?php

$options = "";

try {
    // Se connecter à la DB
    $db = "mysql:host=localhost;dbname=boisson;charset=utf8";
    $user = "root";
    $pwd = "";
    $pdo = new PDO($db, $user, $pwd);

    // Récupérer toutes mes boissons
    $query = "SELECT * FROM boisson;";

    $boissons = $pdo->query($query);

    // J'affiche les boissons dans les options
    foreach ($boissons as $boisson) {
        $options .= '<option value="' . $boisson['id'] . '">' . $boisson['name'] . '</option>';
    }

    // Soumet le formulaire avec l'id de la boisson à supprimer
    if (isset($_POST['boisson_id'])) {
        $query = "DELETE FROM boisson WHERE id = :id";
        $boissons = $pdo->prepare($query);
        $boissons->execute(array(
            ":id" => trim($_POST['boisson_id'])
        ));

        header('location:correction_delete.php');

    }

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Suppression</h1>

    <form action="correction_delete.php" method="post">

        <label for="boisson">Sélectionner la boisson à supprimer</label>
        <select name="boisson_id" id="boisson">
            <!-- <option value="1">Coca</option> -->
            <?php echo $options ?>
        </select>

        <input type="submit" value="Supprimer">

    </form>

</body>
</html>