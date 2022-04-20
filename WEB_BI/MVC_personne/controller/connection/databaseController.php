<?php

// Connexion à la base de données

$host = "localhost";
$dbname = "cybercup";
$charset = "utf8";

$db = "mysql:host=$host;dbname=$dbname;charset=$charset";
$user = "root";
$pwd = "";

$pdo = new PDO($db, $user, $pwd);
