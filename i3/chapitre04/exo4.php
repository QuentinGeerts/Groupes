<?php 
    $resultat = "";
    $nb1 = "";
    $nb2 = "";
    $selectedPlus = "";
    $selectedMoins = "";
    $selectedFois = "";
    $selectedDiv = "";


    if(isset($_POST["nb1"], $_POST["operateur"], $_POST["nb2"]))
    {
        $nb1 = $_POST["nb1"];
        $operateur = $_POST["operateur"];
        $nb2 = $_POST["nb2"];

        if ($nb1 != "" && $nb2 != "") {
            switch ($operateur) {
                case '+':
                    $resultat = $nb1 + $nb2;
                    $selectedPlus = "selected";
                    break;
                case '-':
                    $resultat = $nb1 - $nb2;
                    $selectedMoins = "selected";
                    break;
                case '*':
                    $resultat = $nb1 * $nb2;
                    $selectedFois = "selected";
                    break;
                case '/':
                    if($nb2 != 0)
                    {
                        $resultat = $nb1 / $nb2;
                    }
                    else {
                        $resultat = "Division par 0";
                    }
                    $selectedDiv = "selected";
                    break;
                
                default:
                    $resultat = "Erreur : operateur inconnu";
                    break;
            }
        }
        else {
            $resultat = "Veuillez remplir les champs";
        }



    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <div class="vert">
        <h2>Calculatrice</h2>
        <form action="#" method="post">
            <input type="number" step="any" name="nb1" id="nb1" value="<?= $nb1; ?>">
            <select name="operateur" id="operateur">
                <option value="+" <?= $selectedPlus; ?>>+</option>
                <option value="-" <?= $selectedMoins; ?>>-</option>
                <option value="*" <?= $selectedFois; ?>>*</option>
                <option value="/" <?= $selectedDiv; ?>>/</option>            
            </select>
            <input type="number" step="any" name="nb2" id="nb2" value="<?= $nb2; ?>">
            <input type="submit" value="=">
            <?= $resultat; ?> 
        </form>
    </div>
</body>
</html>