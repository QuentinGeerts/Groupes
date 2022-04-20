<?php 
 // controller

    $checkedPretOui = "";
    $checkedPretNon = "";
    $checkedPanierVideOui = "";
    $checkedPanierVideNon = "";
    $resultat = "";

    if (isset($_POST["pret"], $_POST["panierVide"])) 
    {
        // récupère les champ
        $pret = $_POST["pret"];
        $panierVide = $_POST["panierVide"];
        
        // remplir pour le checked
        if($pret == "oui")
        {
            $checkedPretOui = "checked";
        }
        else{
            $checkedPretNon = "checked";
        }       
        if($panierVide == "oui")
        {
            $checkedPanierVideOui = "checked";
        }
        else{
            $checkedPanierVideNon = "checked";
        }       
        
        // algo pour le résultat
        if ($pret == "oui" && $panierVide == "non") {
            $resultat .= "<p>Lancer la balle</p>";
        }
        else {
            $resultat .= "<p>Ne pas lancer la balle</p>";

            $resultat .= "<ul>";
            if($pret == "non")
            {
                $resultat .= "<li>Car vous n'êtes pas prêt</li>";
            }

            if($panierVide == "oui")
            {
                $resultat .= "<li>Car le panier est vide</li>";
            }
            $resultat .= "</ul>";
        }

    }

    // view

?>

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
        <input type="radio" name="pret" id="pretOui" value="oui" <?= $checkedPretOui; ?>>
        <label for="pretOui">Oui</label>
        <input type="radio" name="pret" id="pretNon" value="non" <?= $checkedPretNon; ?>>
        <label for="pretNon">non</label>

        <p>Panier Vide ?</p>
        <input type="radio" name="panierVide" id="panierVideOui" value="oui" <?= $checkedPanierVideOui; ?>>
        <label for="panierVideOui">Oui</label>
        <input type="radio" name="panierVide" id="panierVideNon" value="non" <?= $checkedPanierVideNon; ?> >
        <label for="panierVideNon">non</label>

        <input type="submit" value="Tester">
    </form>
   <?= $resultat; ?> 
</body>
</html>