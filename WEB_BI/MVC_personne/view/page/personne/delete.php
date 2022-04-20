<h1>Confirmation de suppression</h1>

<?= $message; ?>

<?= $details; ?>

<!-- NE PAS OUBLIER DE METTRE DANS ACTION L'ID DE LA PERSONNE QUE VOUS VOULEZ SUPPRIMER -->
<form action="?section=delete&id=<?= $_GET['id']; ?>" method="post">

    <label for="confirmDelete">Voulez-vous supprimer cette personne ?</label>

    <div class="inline my-4">
        <input type="submit" name="confirmDeleteYes" value="Oui" class="btn btn-success mx-2" autofocus>
        <input type="submit" name="confirmDeleteNo" value="Non" class="btn btn-danger mx-2">
    </div>

</form>