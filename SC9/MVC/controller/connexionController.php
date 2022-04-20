<?php

$message = '';

if (isset($_POST['nom'])) {

    if($_POST['nom'] !== "") {
        $_SESSION['nom'] = trim($_POST['nom']);
        header("Location:?section=accueil");
    } else {
        $message = '<p class="error">Veuillez entrez votre nom</p>';
    }

}

include('view/page/connexion.php');
?>