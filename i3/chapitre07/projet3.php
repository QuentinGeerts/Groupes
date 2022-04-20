<?php 
    $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $tabJoursMois = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

    // générer le tableau html et options
    $table = "<table>";
    $table .= "<tr><th>Mois de l'année</th><th>Jours par mois</th></tr>";
    $options = "";
    for ($i=0; $i < count($tabMois); $i++) 
    { 
        $table .= "<tr><td>" . $tabMois[$i] . "</td><td>" . $tabJoursMois[$i] . "</td></tr>";
        $options .= "<option value='" . $i . "'";
        // form est soumis ET l'indice du choix == à $i
        if(isset($_POST["choix"]) && $_POST["choix"] == $i)
        {
            // ajouter selected uniquement à l'option qui est == au $_POST["choix"]
            $options .= " selected ";
        }
        
        $options .= ">" . $tabMois[$i] . "</option>";
    }
    $table .= "</table>";

    // réponse
    $reponse = "";
    if(isset($_POST["choix"]))
    {
        $indiceMois = $_POST["choix"];
        $reponse = $tabJoursMois[$indiceMois];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Le calendrier</h2>
    <div class="gauche">
        <p>Voici le calendrier avec le nombre de jours par mois</p>
        <?= $table; ?> 
    </div>
    <div class="droite">
        <form action="#" method="post">
            <label for="choix">Rechercher le nombre de jours par mois</label>
            <select name="choix" id="choix">
                <?= $options; ?> 
            </select>
            <input type="submit" value="Rechercher">
            <p><?= $reponse; ?></p>
        </form>
    </div>
</body>
</html>