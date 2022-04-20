<?php

// L'autoroute de votre site
// Toutes les pages y sont renseignées et pointent vers le controller adéquat.

// Les pages sont identifiées par le mot clé "section" dans l'URL

// Le router récupère grâce au `$_GET['section']` la page et pointe vers la page indiquée.

// require_once est équivalent au include
// L'expression require_once est identique à require mis à part que PHP vérifie si le fichier 
// a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.

if ( isset($_GET['section']) ) {
    switch ($_GET['section']) {
        case 'home':
            require_once('controller/homeController.php');
            break;
        
        case 'read':
            require_once('controller/personne/readByIdController.php');
            break;

        case 'insert':
            require_once('controller/personne/insertController.php');
            break;
        
        case 'update':
            require_once('controller/personne/updateController.php');
            break;

        case 'delete':
            require_once('controller/personne/deleteController.php');
            break;

        case 'signin':
            require_once('controller/connection/signinController.php');
            break;

        case 'signout':
            require_once('controller/connection/signoutController.php');
            break;

        default:
            require_once('view/error/404.php');
            break;
    }
} else {
    require_once('controller/homeController.php');
}
