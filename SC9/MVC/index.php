<?php

session_start();

// Entete HTML
include('view/html/head.php');

include('view/menu/menu.php');


// Affichage des pages en fonction de la section définie dans le "router.php"
echo "<div class='container'>";
include('controller/router.php');
echo "</div>";

include('view/html/footer.php');

?>