<?php

// Connexion à la base de données

$host = "localhost";
$dbname = "sc_personne";
$charset = "utf8";

$db = "mysql:host=$host;dbname=$dbname;charset=$charset";
$user = "root";
$pwd = "";

$pdo = new PDO($db, $user, $pwd);
