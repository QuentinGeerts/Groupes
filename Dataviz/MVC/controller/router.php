<?php

if (isset($_GET['section'])) {

    switch ($_GET['section']) {
        case 'accueil':
            require_once('controller/accueilController.php');
            break;
        case 'apropos':
            require_once('controller/aproposController.php');
            break;
        case 'contact':
            require_once('view/page/contact.php');
            break;


        default:
            require_once('view/error/404.php');
            break;
    }
} else {
    require_once('controller/accueilController.php');
}
