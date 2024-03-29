<?php
    // Section récupérée depuis le menu
    if ( isset($_GET['section']) ) {

        switch ($_GET['section']) {
            case 'accueil':
                include('controller/accueilController.php');
                break;
            
            case 'apropos':
                include('controller/aproposController.php');
                break;

            case 'contact':
                include('controller/contactController.php');
                break;

            case 'connexion':
                include('controller/connexionController.php');
                break;
                
            case 'deconnexion':
                include('controller/deconnexionController.php');
                break;

            default:
                include('view/error/404.php');
                break;
        }

    } else {
        include('controller/accueilController.php');
    }
