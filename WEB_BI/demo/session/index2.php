<?php
session_start();
$message = '';

if(isset($_SESSION['userName'])) {

    $message = 'Bonjour et bienvenue ' . $_SESSION['userName'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?= $message; ?>

    <a href="index.php">Revenir à l'accueil</a>
</body>
</html>