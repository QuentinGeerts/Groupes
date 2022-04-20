<?php

$message = "";


$nom = "";
$prenom = "";
$sexe = "";
$ad_rue = "";
$ad_num = "";
$ad_cp = "";
$ad_ville = "";


try {

    // Récupération des informations de la personne à supprimer
    if (isset($_GET['id'])) {

        include('controller/connection/databaseController.php');

        $query = '  SELECT * 
                    FROM PERSONNE 
                    WHERE id = :id';

        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ':id' => $_GET['id']
        ));

        $personne = $obj->fetchAll();

        if (count($personne) == 1) {

            foreach ($personne as $p) {
                $nom = $p['nom'];
                $prenom = $p['prenom'];
                $sexe = $p['sexe'];
                $ad_rue = $p['ad_rue'];
                $ad_num = $p['ad_num'];
                $ad_cp = $p['ad_cp'];
                $ad_ville = $p['ad_ville'];
            }
        } else {
            $message = '<div class="alert alert-danger mx-2" role="alert">';
            $message .= 'Identifiant non trouvé.';
            $message .= '</div>';
        }
    }

    // Formulaire de la modification soumis
    if (isset($_POST['confirmUpdate'], $_GET['id'])) {

        $query = '  UPDATE personne
                    SET nom = :nom, prenom = :prenom, sexe = :sexe, ad_rue = :ad_rue, ad_num = :ad_num, ad_cp = :ad_cp, ad_ville = :ad_ville
                    WHERE id = :id';

        $obj = $pdo->prepare($query);

        $obj->execute(array(
            ':id' => $_GET['id'],
            ':nom' => $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':sexe' => $_POST['sexe'],
            ':ad_rue' => $_POST['ad_rue'],
            ':ad_num' => $_POST['ad_num'],
            ':ad_cp' => $_POST['ad_cp'],
            ':ad_ville' => $_POST['ad_ville'],
        ));

        // Si le client a bien été modifié, message success sinon error
        if ($obj) {
            $message = '<div class="alert alert-success mx-2" role="alert">';
            $message .= 'Le client a bien été modifié.';
            $message .= '</div>';
        } else {
            $message = '<div class="alert alert-danger mx-2" role="alert">';
            $message .= 'Il y a eu un problème lors de la modification du client.';
            $message .= '</div>';
        }

        // On remet à jour la vue pour voir les modifications appliquées
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $ad_rue = $_POST['ad_rue'];
        $ad_num = $_POST['ad_num'];
        $ad_cp = $_POST['ad_cp'];
        $ad_ville = $_POST['ad_ville'];
    }
} catch (PDOException $e) {
    $message = '<div class="alert alert-danger mx-2" role="alert">';
    $message .= $e->getMessage();
    $message .= '</div>';
}


// Si je suis connecté, j'affiche la vue, sinon j'affiche un message d'erreur
if (isset($_SESSION['login'])) {
    include('view/page/personne/update.php');
} else {
    echo '<div class="alert alert-danger" role="alert">';
    echo 'Vous devez vous connecter pour accéder à la modification des clients.';
    echo '</div>';
}
