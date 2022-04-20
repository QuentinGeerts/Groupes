<?php


$message = "";

try {

    if (isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['sexe'],
        $_POST['ad_rue'],
        $_POST['ad_num'],
        $_POST['ad_cp'],
        $_POST['ad_ville']
    )) {

        include("controller/connection/databaseController.php");

        $query = 'INSERT INTO personne 
                VALUES (NULL, :nom, :prenom, :sexe, :ad_rue, :ad_num, :ad_cp, :ad_ville)';

        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ':nom' => $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':sexe' => $_POST['sexe'],
            ':ad_rue' => $_POST['ad_rue'],
            ':ad_num' => $_POST['ad_num'],
            ':ad_cp' => $_POST['ad_cp'],
            ':ad_ville' => $_POST['ad_ville'],
        ));

        if ($obj) {
            $message = '<div class="alert alert-success mx-2" role="alert">';
            $message .= 'La personne a bien été supprimée';
            $message .= '</div>';
        } else {
            $message = '<div class="alert alert-danger mx-2" role="alert">';
            $message .= 'Il y a eu un problème lors de l\'ajout.';
            $message .= '</div>';
        }
    }
} catch (PDOException $e) {
    $message = '<div class="alert alert-danger" role="alert">';
    $message .= $e->getMessage();
    $message .= '</div>';
}


if (isset($_SESSION['login'])) {
    include('view/page/personne/insert.php');
} else {
    echo '<div class="alert alert-danger" role="alert">';
    echo 'Vous devez vous connecter pour accéder à l\'insersion des clients.';
    echo '</div>';
}
