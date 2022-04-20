<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
    <h2>Exo1</h2>
    <form action="#" method="post">
        <label for="annee">Entrez votre année :</label>
        <input type="number" name="annee" id="annee">
        <input type="submit" value="Tester">
    </form>
    <?php 
    // sécurite : si j'ai une année qui a été initialisée alors tu fais ...
    if (isset($_POST["annee"])) {
        // récupérer le champ annee
        $annee = $_POST["annee"];

        // Si l'année est divisble par 4 et non par 100 ou par 400 elle est bissextile
        if ($annee%4== 0 && $annee % 100 != 0 || $annee % 400 == 0) {
            echo "<p>L'année $annee est bissextile</p>";
        }
        else{
            echo "<p>L'année $annee n'est pas bissextile</p>";
        }
    }
    

?>
</body>
</html>