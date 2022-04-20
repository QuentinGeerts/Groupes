<h1>Ajouter un client</h1>

<?= $message; ?>

<form action="?section=insert" method="post">

    <!-- Informations -->

    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" autofocus required>
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" required>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexe" id="sexeM" value="M" checked>
        <label class="form-check-label" for="sexeM">Homme</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexe" id="sexeF" value="F">
        <label class="form-check-label" for="sexeF">Femme</label>
    </div>

    <!-- Adresse -->
    <div class="mb-3">
        <label for="ad_rue" class="form-label">Rue</label>
        <input type="text" name="ad_rue" id="ad_rue" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="ad_num" class="form-label">Numéro</label>
        <input type="text" name="ad_num" id="ad_num" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="ad_cp" class="form-label">Code postal</label>
        <input type="number" name="ad_cp" id="ad_cp" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="ad_ville" class="form-label">Ville</label>
        <input type="text" name="ad_ville" id="ad_ville" class="form-control" required>
    </div>

    <input type="submit" value="Ajouter" class="btn btn-primary">

</form>