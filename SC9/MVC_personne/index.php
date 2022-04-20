<?php

// Activation de la session
session_start();
ob_start();

// Initialisation de la variable session pour le blocage du compte après x tentative(s)
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

// Permet de supprimer la variable de session 'count' pour débloquer le compte
// unset($_SESSION['count']);

// Import de la partie HTML / HEAD / BODY (DÉBUT)
include('view/html/head.php');

// Import de la barre de navigation
include('view/menu/menu.php');

// Import de la page router qui redirige vers la page ciblée dans l'URL (section = page)
echo "<div class='container'>";
include('controller/router.php');
echo "</div>";

// Import de la partie BODY (FIN) / HTML (FIN)
include('view/html/footer.php');
