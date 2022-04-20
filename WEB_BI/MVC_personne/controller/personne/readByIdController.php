<?php

$message = "";
$details = "";

if (isset($_GET['id'])) {
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
                $details .= "<div class='details'>";
                $details .= "<p>Nom : {$p["nom"]}</p>";
                $details .= "<p>Prénom : {$p["prenom"]}</p>";
                $details .= "<p>Sexe : {$p["sexe"]}</p>";
                $details .= "<h2>Adresse : </h2>";
                $details .= "<p>{$p["ad_num"]} {$p["ad_rue"]}</p>";
                $details .= "<p>{$p["ad_cp"]} {$p["ad_ville"]}</p>";
                $details .= "</div>";
            }
        } else {
            // $details .= "<h2>Personne non trouvée.</h2>";
            $message = '<div class="alert alert-danger mx-2" role="alert">';
            $message .= 'Personne non trouvée.';
            $message .= '</div>';
        }
    } catch (PDOException $e) {
        $message = '<div class="alert alert-danger mx-2" role="alert">';
        $message .= $e->getMessage();
        $message .= '</div>';
    }
} else {
    $message = '<div class="alert alert-danger mx-2" role="alert">';
    $message .= 'Vous ne pouvez pas accéder à ces détails.';
    $message .= '</div>';
}

include('view/page/personne/read.php');
