<?php 
    $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $table = "";

    if (isset($_POST["choix"])) {
        $table .= "<table>";
        $table .= "<tr><th>Mois de l'année</th></tr>";

        if($_POST["choix"] === "inverse")
        {
            $tabMois = array_reverse($tabMois);
        }

        for ($i=0; $i < count($tabMois); $i++) { 
            $table .= "<tr><td>" . $tabMois[$i] . "</td></tr>";
        }
        $table .= "</table>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Le calendrier</h2>
    <form action="#" method="post">
        <p>Choisissez l'ordre dans lequel vous souhaitez afficher le calendrier </p>
        <input type="radio" name="choix" id="chrono" value="chrono">
        <label for="chrono">Chronologique</label>
        <input type="radio" name="choix" id="inverse" value="inverse">
        <label for="inverse">Inverse</label>
        <input type="submit" value="Afficher">
    </form>
    <?= $table; ?> 
</body>
</html>