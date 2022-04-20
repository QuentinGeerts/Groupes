<?php

$error = "";

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

        include('database.php');

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
        } else
            $error = "<p class='ErrorMessage'>Identifiant non trouvé.</p>";
    }

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

        if ($obj) {
            $error = "<p class='success'>Le client a bien été modifié.</p>";
        } else {
            $error = "<p class='error'>Il y a eu un problème lors de la modification du client.</p>";
        }

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $ad_rue = $_POST['ad_rue'];
        $ad_num = $_POST['ad_num'];
        $ad_cp = $_POST['ad_cp'];
        $ad_ville = $_POST['ad_ville'];
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

            <h1>Modification</h1>

            <form action="update.php?id=<?= $_GET['id']; ?>" method="post">

                <!-- Informations -->

                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="<?= $nom ?>" autofocus required>

                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>" required>

                <div>
                    <input type="radio" name="sexe" id="sexeM" value="M" <?= ($sexe == 'M' ? 'checked' : '') ?>>
                    <label for="sexeM">Homme</label>
                </div>
                <div>
                    <input type="radio" name="sexe" id="sexeF" value="F" <?= ($sexe == 'F' ? 'checked' : '') ?>>
                    <label for="sexeF">Femme</label>
                </div>

                <!-- Adresse -->

                <label for="ad_rue">Rue</label>
                <input type="text" name="ad_rue" id="ad_rue" value="<?= $ad_rue ?>" required>
                <label for="ad_num">Numéro</label>
                <input type="text" name="ad_num" id="ad_num" value="<?= $ad_num ?>" required>
                <label for="ad_cp">Code postal</label>
                <input type="number" name="ad_cp" id="ad_cp" value="<?= $ad_cp ?>" required>
                <label for="ad_ville">Ville</label>
                <input type="text" name="ad_ville" id="ad_ville" value="<?= $ad_ville ?>" required>

                <input type="submit" value="Ajouter" name="confirmUpdate">

            </form>

        </div>

        <?= $error; ?>

    </div>
</body>

</html>