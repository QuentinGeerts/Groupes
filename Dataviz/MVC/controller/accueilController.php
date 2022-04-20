<?php

require_once('model/Boisson.php');

// Traitements
$boisson = new Boisson();
$tabBoissons = $boisson->read();


$table = "";

foreach($tabBoissons as $b) {
    $table .= "<tr>";
    $table .= "<td>{$b['id']}</td>";
    $table .= "<td>{$b['nom']}</td>";
    $table .= "</t>";
}

require_once('view/page/accueil.php');

?>