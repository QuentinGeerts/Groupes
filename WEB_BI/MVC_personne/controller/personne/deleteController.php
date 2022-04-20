<?php

$nom = "";
$prenom = "";
$sexe = "";
$ad_rue = "";
$ad_num = "";
$ad_cp = "";
$ad_ville = "";

$details = "";
$message = "";

try {

    include("controller/connection/databaseController.php");

    $query = "SELECT * FROM personne WHERE id = :id";

    $obj = $pdo->prepare($query);
    $obj->execute(array(
        ':id' => $_GET['id']
    ));

    $personne = $obj->fetchAll();

    if (count($personne) == 1) {
        foreach ($personne as $p) {
            $details .= "<h2>Informations : </h2>";
            $details .= "<p>Nom : {$p["nom"]}</p>";
            $details .= "<p>Prénom : {$p["prenom"]}</p>";
            $details .= "<p>Sexe : {$p["sexe"]}</p>";
            $details .= "<h2>Adresse : </h2>";
            $details .= "<p>{$p["ad_num"]} {$p["ad_rue"]}</p>";
            $details .= "<p>{$p["ad_cp"]} {$p["ad_ville"]}</p>";
        }
    } else {
        $details .= "<h2>Personne non trouvée.</h2>";
    }

    if (isset($_POST['confirmDeleteYes'])) {

        $query = 'DELETE FROM personne WHERE id = :id';

        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ':id' => $_GET['id']
        ));

        if ($obj) {
            header('Location:?section=home');
        }
    }

    if (isset($_POST['confirmDeleteNo'])) {
        header('Location:?section=home');
    }
} catch (PDOException $e) {
    $message = '<div class="alert alert-danger" role="alert">';
    $message .= $e->getMessage();
    $message .= '</div>';
}


if (isset($_SESSION['login'])) {
    include('view/page/personne/delete.php');
} else {
    echo '<div class="alert alert-danger" role="alert">';
    echo 'Vous devez vous connecter pour accéder à la suppression des clients.';
    echo '</div>';
}
