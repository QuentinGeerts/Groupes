<?php

// L'autoroute de votre site
// Toutes les pages y sont renseignées et pointent vers le controller adéquat.

// Les pages sont identifiées par le mot clé "section" dans l'URL

// Le router récupère grâce au `$_GET['section']` la page et pointe vers la page indiquée.

if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'home':
            include('controller/homeController.php');
            break;

        case 'read':
            include('controller/personne/readByIdController.php');
            break;

        case 'insert':
            include('controller/personne/insertController.php');
            break;

        case 'update':
            include('controller/personne/updateController.php');
            break;

        case 'delete':
            include('controller/personne/deleteController.php');
            break;

        case 'signin':
            include('controller/connection/signinController.php');
            break;

        case 'signout':
            include('controller/connection/signoutController.php');
            break;

        default:
            include('view/error/404.php');
            break;
    }
} else {
    include('controller/homeController.php');
}
