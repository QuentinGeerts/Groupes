<?php
$message = "";
$options = "";
$obj = null;

function getBoissons($pdo, $options)
{
    $query = "SELECT * FROM boisson;";

    $obj = $pdo->query($query);

    $boissons = $obj->fetchAll();

    foreach ($boissons as $boisson) {
        $options .= "<option value=\"" . $boisson['id'] . "\">" . $boisson['id'] . " " . $boisson['name'] . "</option>";
    }

    return $options;
}

try {
    // Récupération des boissons pour les afficher dans la liste
    $basededonnees = "mysql:host=localhost;dbname=boisson;charset=utf8";
    $user = "root";
    $pwd = "";

    $pdo = new PDO($basededonnees, $user, $pwd);

    $options = getBoissons($pdo, $options);

    // 
    if (isset($_POST['name'], $_POST['selectedId'])) {
        if (preg_match("/^[a-zA-Zéèëê ]{3,}$/i", $_POST['name']) > 0) {
            $query = "UPDATE boisson SET name = :name WHERE id = :id;";

            $obj = $pdo->prepare($query);
            $obj->execute(array(
                ":id" => trim($_POST['selectedId']),
                ":name" => trim($_POST['name'])
            ));
        }

        if ($obj) {
            $message = "<p class=\"success\">La boisson a bien été modifiée</p>";
        } else {
            $message = "<p class=\"error\">Il y a eu un problème pendant la modification de la boisson.</p>";
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
        <h1>Modifier</h1>

        <form action="update.php" method="POST">

            <label for="selectedId">Choississez la boisson à modifier : </label>
            <select name="selectedId" id="selectedId">
                <?= $options; ?>
            </select>

            <label for="boisson_name">Entrez le nouveau nom de la boisson</label>
            <input type="text" name="name" id="boisson_name" autofocus>

            <input type="submit" value="Modifier">

            <?= $message ?>
        </form>
    </div>


</body>

</html>