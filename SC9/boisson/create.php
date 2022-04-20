<?php
$message = "";
$obj = null;

if (isset($_POST['name'])) {
    if (preg_match("/^[a-zA-Zéèëê ]{3,}$/i", $_POST['name']) > 0) {
        $basededonnees = "mysql:host=localhost;dbname=boisson;charset=utf8";
        $user = "root";
        $pwd = "";

        $pdo = new PDO($basededonnees, $user, $pwd);

        $query = "INSERT INTO boisson (name) VALUES (:name)";

        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ":name" => trim($_POST['name'])
        ));
    } 

    if ($obj) {
        $message = "<p class=\"success\">La boisson a bien été ajoutée</p>";
    } else {
        $message = "<p class=\"error\">Il y a eu un problème pendant l'ajout de la boisson.</p>";
    }
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
        <h1>Insérer</h1>

        <form action="create.php" method="POST">

            <label for="boisson_name">Entrez le nom de la boisson</label>
            <input type="text" name="name" id="boisson_name" autofocus>

            <input type="submit" value="Insérer">

            <?= $message ?>
        </form>
    </div>

</body>

</html>