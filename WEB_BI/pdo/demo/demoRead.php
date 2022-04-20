<?php

$dsn = "mysql:host=localhost;dbname=boisson;charset=UTF8";
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dsn, $user, $pwd);
    
    $query = "  SELECT *
                FROM boisson";

    $boissons = $pdo->query($query);

    foreach($boissons as $boisson) {
        echo $boisson[0] . ' ' . $boisson['nom'] . '<br>';
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
