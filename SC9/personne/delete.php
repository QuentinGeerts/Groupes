<?php

$error = "";

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

    // Récupération des informations de la personne à supprimer
    // if (isset($_GET['id'])) {

    //     include('database.php');

    //     $query = '  SELECT * 
    //                 FROM PERSONNE 
    //                 WHERE id = :id';

    //     $obj = $pdo->prepare($query);
    //     $obj->execute(array(':id' => $_GET['id']));

    //     $personne = $obj->fetchAll();

    //     if (count($personne) == 1) {

    //         foreach ($personne as $p) {
    //             $nom = $p['nom'];
    //             $prenom = $p['prenom'];
    //             $sexe = $p['sexe'];
    //             $ad_rue = $p['ad_rue'];
    //             $ad_num = $p['ad_num'];
    //             $ad_cp = $p['ad_cp'];
    //             $ad_ville = $p['ad_ville'];
    //         }

    //     } else
    //         $error = "<p class='ErrorMessage'>Identifiant non trouvé.</p>";
    // }


    include('database.php');

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
        include('database.php');

        $query = 'DELETE FROM personne WHERE id = :id';

        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ':id' => $_GET['id']
        ));

        if ($obj) {
            $message = '<p class="success">La personne a bien été supprimée</p>';
            header("refresh:1; url=index.php");
        }
    }

    if (isset($_POST['confirmDeleteNo'])) {
        header('Location:index.php');
    }
} catch (PDOException $e) {
    $error = "<p class='ErrorMessage'>{$e->getMessage()}</p>";
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Suppression</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container">

        <div class="details">

            <h1>Confirmation de suppression</h1>

            <?= $details; ?>

            <form action="delete.php?id=<?= $_GET['id']; ?>" method="post">

                <label for="confirmDelete">Voulez-vous supprimer cette personne ?</label>

                <div class="inline">
                    <input type="submit" name="confirmDeleteYes" value="Oui" autofocus>
                    <input type="submit" name="confirmDeleteNo" value="Non">
                </div>

                <?= $message; ?>

            </form>

        </div>

        <?= $error; ?>

    </div>
</body>

</html>