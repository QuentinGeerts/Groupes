<?php

function getBoissons($pdo, $options) {
    $query = "SELECT * FROM boisson;";

    $obj = $pdo->query($query);

    $boissons = $obj->fetchAll();

    foreach ($boissons as $boisson) {
        $options .= "<option value='" . $boisson['id'] . "'>" . $boisson['id'] . " " . $boisson['name'] . "</option>";
    }

    return $options;
}

$options = "";
$message = "";

try {
    // Récupération des boissons pour les afficher dans la liste
    $basededonnees = "mysql:host=localhost;dbname=boisson;charset=utf8";
    $user = "root";
    $pwd = "";

    $pdo = new PDO($basededonnees, $user, $pwd);

    $options = getBoissons($pdo, $options);

    // Suppression

    if ( isset($_POST['selectedId']) ) {
        $query = "DELETE FROM boisson WHERE id = :id";
        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ":id" => trim($_POST['selectedId'])
        ));
        

        if ($obj) {
            $message = "<p class='success'>La boisson a bien été supprimée</p>";
        } else {
            $message = "<p class=\"error\">Il y a eu un problème pendant la suppression de la boisson.</p>";
        }

        $options = "";
        $options = getBoissons($pdo, $options);
    }


    
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Boisson</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include("menu.php"); ?>

    <div class="container">
        <h1>Supprimer</h1>

        <form action="delete.php" method="POST">
            <label for="selectedId">Choississez la boisson à supprimer : </label>
            <select name="selectedId" id="selectedId">
                <?= $options; ?>
            </select>

            <input type="submit" value="Supprimer">

            <?= $message; ?>
        </form>
    </div>


</body>

</html>