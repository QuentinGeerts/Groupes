<h1>Mettre à jour</h1>
<!-- Message d'erreur/information -->
<?= $message; ?>

<!-- Formulaire de modification des données du client - remplissage automatique des "value" -->
<!-- Récupération des valeurs dans 'controller/personne/updateController.php' -->
<!-- NE PAS OUBLIER DE METTRE DANS ACTION L'ID DE LA PERSONNE QUE VOUS VOULEZ UPDATE -->
<form action="?section=update&id=<?= $_GET['id']; ?>" method="post">

    <!-- Informations -->
    <div class="mb-3">
        <label class="form-label" for="nom">Nom</label>
        <input class="form-control" type="text" name="nom" id="nom" value="<?= $nom ?>" autofocus required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="prenom">Prénom</label>
        <input class="form-control" type="text" name="prenom" id="prenom" value="<?= $prenom ?>" required>
    </div>
    <!-- Opérateur ternaire permettant de mettre la valeur 'checked' si le sexe est M ou F -->
    <div class="mb-3">
        <input class="form-check-input" type="radio" name="sexe" id="sexeM" value="M" <?= ($sexe == 'M' ? 'checked' : '') ?>>
        <label class="form-check-label" for="sexeM">Homme</label>
    </div>
    <div class="mb-3">
        <input class="form-check-input" type="radio" name="sexe" id="sexeF" value="F" <?= ($sexe == 'F' ? 'checked' : '') ?>>
        <label class="form-check-label" for="sexeF">Femme</label>
    </div>

    <!-- Adresse -->
    <div class="mb-3">
        <label class="form-label" for="ad_rue">Rue</label>
        <input class="form-control" type="text" name="ad_rue" id="ad_rue" value="<?= $ad_rue ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="ad_num">Numéro</label>
        <input class="form-control" type="text" name="ad_num" id="ad_num" value="<?= $ad_num ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="ad_cp">Code postal</label>
        <input class="form-control" type="number" name="ad_cp" id="ad_cp" value="<?= $ad_cp ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="ad_ville">Ville</label>
        <input class="form-control" type="text" name="ad_ville" id="ad_ville" value="<?= $ad_ville ?>" required>
    </div>

    <!-- name donné pour vérifier dans le controller si le formulaire a bien été soumis -->
    <input class="btn btn-primary" type="submit" value="Ajouter" name="confirmUpdate">

</form>