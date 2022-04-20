<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    <h2>Exo2</h2>
    <form action="#" method="post">
        <p>Prêt ?</p>
        <input type="radio" name="pret" id="pretOui" value="oui">
        <label for="pretOui">Oui</label>
        <input type="radio" name="pret" id="pretNon" value="non">
        <label for="pretNon">non</label>

        <p>Panier Vide ?</p>
        <input type="radio" name="panierVide" id="panierVideOui" value="oui">
        <label for="panierVideOui">Oui</label>
        <input type="radio" name="panierVide" id="panierVideNon" value="non">
        <label for="panierVideNon">non</label>

        <input type="submit" value="Tester">
    </form>
    <?php 
    if(isset($_POST["pret"], $_POST["panierVide"]))
    {
        $pret = $_POST["pret"];
        $panierVide = $_POST["panierVide"];
        

        if ($pret == "oui" && $panierVide == "non") {
            echo "<p>Lancer la balle</p>";
        }
        else {
            echo "<p>Ne pas lancer la balle</p>";

            echo "<ul>";
            if($pret == "non")
            {
                echo "<li>Car vous n'êtes pas prêt</li>";
            }

            if($panierVide == "oui")
            {
                echo "<li>Car le panier est vide</li>";
            }
            echo "</ul>";
        }
    }


?>
</body>
</html>