<?php

// Connexion à une base de données
$dsn = "mysql:host=localhost;dbname=dataviz;charset=utf8";
$user = "root";
$pwd = "";

try {
    // On tente de se connecter
    $pdo = new PDO($dsn, $user, $pwd);
    // echo "Connected";
}
catch (PDOException $e) {
    echo $e->getMessage();
}

?>