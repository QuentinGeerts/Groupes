<h2>Connexion</h2>

<?= $message; ?>

<form action="?section=signin" method="post">
    <div class="mb-3">
        <label class="form-label" for="login">Nom d'utilisateur</label>
        <input class="form-control" type="text" name="login" id="login" autofocus>
    </div>

    <div class="mb-3">
        <label class="form-label" for="pwd">Mot de passe</label>
        <input class="form-control" type="password" name="pwd" id="pwd">
    </div>
    <div class="mab-3">
        <!-- Désactivation du bouton dans le cas d'un compte bloqué -->
        <input class="btn btn-primary " type="submit" value="Connexion" <?= (isset($_SESSION['count']) && $_SESSION['count'] >= 3 ? 'disabled' : '') ?>>
    </div>

</form>