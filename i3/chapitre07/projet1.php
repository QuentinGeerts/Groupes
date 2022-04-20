<?php 
    $selectedMin = "";
    $selectedMax = "";
    $selectedSum = "";
    $selectedMoy = "";

    $tab = array(1, 4, 3, 5, 2);

    $table = "";
    for ($i=0; $i < count($tab); $i++) { 
        $table .= "<td>" . $tab[$i] . "</td>";
    }
    
    $resultat="";
    if(isset($_POST["choix"]))
    {
        switch ($_POST["choix"]) {
            case 'petit':
                $resultat = min($tab);
                $selectedMin = "selected";
                break;
            case 'grand':
                $resultat = max($tab);
                $selectedMax = "selected";
                break;
            case 'somme':
                $resultat = array_sum($tab);
                $selectedSum = "selected";
                break;
            case 'moyenne':
                $resultat = array_sum($tab)/count($tab);
                $selectedMoy = "selected";
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
    <title>Projet1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Projet1</h1>
    <table>
        <tr>
            <?= $table; ?> 
        </tr>
    </table>
    <form action="#" method="post">
        <select name="choix" id="">
            <option value="petit" <?= $selectedMin; ?> >Plus petit</option>
            <option value="grand" <?= $selectedMax; ?> >Plus grand</option>
            <option value="somme" <?= $selectedSum; ?> >Somme</option>
            <option value="moyenne"<?= $selectedMoy; ?> >Moyenne</option>
        </select>
        <input type="submit" value="Rechercher">
    </form>
    <p><?= $resultat; ?> </p>
</body>
</html>