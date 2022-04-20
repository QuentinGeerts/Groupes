<?php

/*
    
    # PROJET - CLIENT COMPLET + SESSION
    # Utilisation du Framework `Bootstrap` pour le CSS
    # Pour les questions, n'hésitez pas à me contacter sur Teams
    # Ou par email : quentin.geerts@bstorm.be

*/

/*

    N'hésitez pas à aller voir la documentation pour toutes informations :

    > https://www.php.net/
    > https://getbootstrap.com/
    > https://www.w3schools.com/
    > https://developer.mozilla.org/fr/

*/

// Activation de la session
session_start();
ob_start();

// Initialisation de la variable session pour le blocage du compte après x tentative(s)
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

// Permet de supprimer la variable de session 'count' pour débloquer le compte (quand bloqué)
// A décommenter => rafraichir la page => recommenter 
//unset($_SESSION['count']);

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
