<?php

$dsn = "mysql:host=localhost;dbname=boisson;charset=UTF8";
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dsn, $user, $pwd);
    
    $query = "  SELECT *
                FROM boisson";

    $tab = $pdo->query($query);

    $boissons = $tab->fetchAll(PDO::FETCH_KEY_PAIR);

    print_r($boissons);


} catch (PDOException $e) {
    echo $e->getMessage();
}
