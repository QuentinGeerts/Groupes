<?php

$message = '';

if (isset($_POST['nom'])) {

    // Vérifier que l'utilisateur remplis bien le formulaire
    if (empty(trim($_POST['nom']))) {
        $message = '<p>Erreur : Veuillez entrez votre nom.<p>';
    } else {
        $_SESSION['nom'] = trim($_POST['nom']);
        header('Location:?section=accueil');
    }
}


include('view/page/connexion.php');
