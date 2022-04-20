<?php

// Connexion à la base de données
$host = 'localhost';
$dbname = 'boisson';
$charset = 'UTF8';

// dsn = data source name
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// phpmyadmin => privilèges
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dsn, $user, $pwd);

    if($pdo) $status = "<p id='status' class='success'>Connected to your database</p>";

} catch (PDOException $e) {
    $status = "<p id='status' class='error'>Error : " . $e->getMessage() . "</p>";
}