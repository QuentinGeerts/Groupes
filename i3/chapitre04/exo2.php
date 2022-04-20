<?php 
    $pret = $_POST["pret"];
    $panierVide = $_POST["panierVide"];

    if ($pret == "oui" && $panierVide == "non") {
        echo "Lancer la balle";
    }
    else {
        echo "Ne pas lancer la balle";

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


?>