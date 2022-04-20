<?php

$dsn = "mysql:host=localhost;dbname=boisson;charset=UTF8";
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dsn, $user, $pwd);
    
    $query = "DELETE FROM boisson";

    $boissons = $pdo->exec($query);

    var_dump($boissons);

} catch (PDOException $e) {
    echo $e->getMessage();
}
