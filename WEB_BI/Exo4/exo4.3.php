<?php

/*
        Distributeur de boissons
        Réaliser l’algorithme d’un distributeur de boissons. 
        Ce dernier propose plusieurs boissons (eau et coca) et 
        l’utilisateur choisit celle qu’il désire en entrant le 
        numéro correspondant. 
        Ne pas oublier de vérifier s’il y a encore des boissons en stock.
    */

$resultat = "";

$stockEau = 4;
$stockCoca = 1;
$stockFanta = 0;

// Si mon formulaire est soumis
if (isset($_POST['choix'])) {
    
    $resultat = "<p>";

    $choix = $_POST['choix'];

    switch ($choix) {
        case 1:
            // Eau
            if($stockEau > 0) {
                $stockEau --;
                $resultat .= "Voici votre eau. <br>Merci pour achat. <br>Stock restant : $stockEau";
            } else {
                $resultat .= "Il n'y a plus de stock";
            }
            break;
        case 2:
            // Coca
            if($stockCoca > 0) {
                $stockCoca --;
                $resultat .= "Voici votre coca. <br>Merci pour achat. <br>Stock restant : $stockCoca";
            } else {
                $resultat .= "Il n'y a plus de stock";
            }
            break;
        case 3:
            // Fanta
            if($stockFanta > 0) {
                $stockFanta --;
                $resultat .= "Voici votre fanta. <br>Merci pour achat. <br>Stock restant : $stockFanta";
            } else {
                $resultat .= "Il n'y a plus de stock";
            }
            break;
        default:
            $resultat = "Erreur: Choix inconnu";
            break;
    } 
    
    $resultat .= "</p>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Distributeur</title>

    <style>
        form>* {
            display: block;
            margin: 15px 0;
            width: 160px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Distributeur à boissons</h2>

    <form action="./exo4.3.php" method="post">

        <label for="choix">Choisissez une boisson :</label>
        <select name="choix" id="choix">
            <option value="1">Eau stock : <?= $stockEau ?> </option>
            <option value="2">Coca stock : <?= $stockCoca ?></option>
            <option value="3">Fanta stock : <?= $stockFanta ?></option>
        </select>

        <input type="submit" value="Commander">

    </form>

    <?= $resultat; ?>

</body>

</html>