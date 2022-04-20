<?php

$message = '';

if (isset($_POST['login'], $_POST['pwd'], $_SESSION['count'])) {

    // Vérification que les champs ont bien été remplis et que le count est bien inférieure à 3 
    if ($_POST['login'] !== "" && $_POST['pwd'] !== '' && $_SESSION['count'] < 3) {

        // Dans le cas où l'utilisateur a essayé de se connecter, on incrémente l'essai de 1
        $_SESSION['count']++;

        // S'il a bien rentré les bons identifiants, il se connecte
        if ($_POST['login'] === 'admin' && $_POST['pwd'] === 'admin') {
            $_SESSION['login'] = trim($_POST['login']);

            $message = '<div class="alert alert-success" role="alert">';
            $message .= 'Connexion réussie.';
            $message .= '</div>';

            // Réinitialisation du count
            $_SESSION['count'] = 0;

            // Redirection après 2 secondes vers la page d'accueil
            header('refresh:2;url=?section=home');
        } else {

            $message = '<div class="alert alert-danger" role="alert">';
            $message .= 'identifiant ou mot de passe incorrect.';
            $message .= '</div>';
        }
    } else {
        $message = '<div class="alert alert-danger" role="alert">';
        $message .= 'Veuillez entrer un identifiant/mot de passe.';
        $message .= '</div>';
    }
}


if (isset($_SESSION['count'])) {
    // Si le compte est arrivé à 3 essais, la connexion est bloquée.
    if ($_SESSION['count'] >= 3) {
        $message = '<div class="alert alert-danger" role="alert">';
        $message .= 'Compte bloqué.';
        $message .= '</div>';
    }
}

// Affichage de la vue de connexion
include('view/page/connection/signin.php');
