<?php

$dsn = "mysql:host=localhost;dbname=boisson;charset=UTF8";
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dsn, $user, $pwd);
    
    $query = "  SELECT *
                FROM boisson";

    $boissons = $pdo->query($query);

    while($tab = $boissons->fetch(PDO::FETCH_NUM)) {
        echo $tab[0] . ' ' . $tab[1];
    }

    $boissons->closeCursor();

} catch (PDOException $e) {
    echo $e->getMessage();
}
