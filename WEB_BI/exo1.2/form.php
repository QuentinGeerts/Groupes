<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Envoi nom/prénom</title>
        <style>
            form > * {
                display: block;
            }
        </style>
    </head>
    <body>
        <form action="reponse.php" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" />
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" />

            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>
