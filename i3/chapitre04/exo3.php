<?php 
    // initaliser les variables
    $stockEau = 0;
    $stockCoca = 2;
    $resultat = "";

    $selectedCoca = "";
    $selectedEau = "";

    // seulement si le form est submit
    if(isset($_POST["choix"]))
    {
        $choix = $_POST["choix"];
        // echo $choix;
        switch ($choix) {
            case 'eau':
                $selectedEau = "selected";
                // vérifier le stock
                if($stockEau > 0)
                {
                    $stockEau--;
                    // $stockEau = $stockEau -1;
                    // $stockEau -= 1;
                    $resultat = "Voici votre eau";
                }
                else {
                    $resultat = "Stock indisponible d'eau";
                }
                $resultat .= "</p><p>Il reste $stockEau de eau et $stockCoca de coca";
                break;
            case 'coca':
                $selectedCoca = "selected";
                // vérifier le stock
                if($stockCoca > 0)
                {
                    $stockCoca--;
                    $resultat = "Voici votre coca";
                }
                else {
                    $resultat = "Stock indisponible de coca";
                }
                $resultat .= "</p><p>Il reste $stockEau de eau et $stockCoca de coca";
                break;
            
            default:
                $resultat = "Erreur : choix inconnu";
                break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
    <h2>Exo3</h2>
    <form action="#" method="post">
        <label for="choix">Choisissez votre boisson :</label>
        <select name="choix" id="choix">
            <option value="eau" <?= $selectedEau; ?> >Eau</option>
            <option value="coca"<?= $selectedCoca; ?> >Coca</option>
        </select>
        <input type="submit" value="Commander">
    </form>
    <p><?= $resultat; ?> </p>
</body>
</html>