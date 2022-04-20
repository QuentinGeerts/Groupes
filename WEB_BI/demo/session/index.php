<?php
session_start();
ob_start();

$disconnect = "";

if (isset($_POST['userName'])) {
    $_SESSION['userName'] = $_POST['userName'];

    header('Location:index2.php');
}

if(isset($_SESSION['userName'])) {
    $disconnect = '<form action="./index.php" method="post"><input type="submit" name="disconnect" value="Déconnexion"></form>';   
}

if(isset($_POST['disconnect'])) {
    unset($_SESSION['userName']);
    session_destroy();
    header('Location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <input type="text" name="userName" id="userName">
        <input type="submit" value="Connexion">
    </form>

    <?= $disconnect; ?>
</body>

</html>