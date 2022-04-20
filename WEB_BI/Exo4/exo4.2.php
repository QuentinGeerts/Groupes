<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>LancerBalles</title>
</head>

<body>

    <form action="./exo4.2.php" method="post">

        <p>Prêt ?</p>

        <input type="radio" name="pret" id="pretOui" value="oui" checked>
        <label for="pretOui">Oui</label><br>
        <input type="radio" name="pret" id="pretNon" value="non">
        <label for="pretNon">Non</label>

        <p>Panier vide ?</p>

        <input type="radio" name="panierVide" id="panierVideOui" value="oui" checked>
        <label for="panierVideOui">Oui</label><br>
        <input type="radio" name="panierVide" id="panierVideNon" value="non">
        <label for="panierVideNon">Non</label>

        <br>
        <br>

        <input type="submit" value="Envoyer">
    </form>

    <?php

    /*

        Lanceur de balles de tennis
        Réaliser l’algorithme d’un lanceur de balles de tennis. 
        Ce lanceur possède deux états :

        – prêt : permet de savoir si le tennisman est prêt. 
          Il ne faut pas lancer de balles dans le cas contraire

        – panierVide : permet de savoir s’il y a encore des balles disponibles
          Le lanceur de balle écrira « lancerBalle » qui, vous l’aurez compris, 
          permet de lancer une balle.

        */

    if (isset($_POST['pret']) && isset($_POST['panierVide'])) {

        $pret = $_POST['pret'];
        $panierVide = $_POST['panierVide'];

        if ($pret == "oui" && $panierVide == "non") {
            echo "<p>Lancer la balle</p>";
        }
        
        else {
            echo "<p>Ne pas lancer la balle</p>";
            echo "<ul>";

            if($pret == "non")
                echo "<li>Car vous n'êtes pas prêt.</li>";
                
            if($panierVide == "oui")
                echo "<li>Car le panier est vide.</li>";
                

            echo "</ul>";
        }
    }

    ?>
</body>

</html>