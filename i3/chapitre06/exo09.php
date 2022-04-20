<?php 
    $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");

    $tabJoursMois = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

    $resultat = "<tr><th>Mois</th><th>Nb Jours</th></tr>";
    for ($i=0; $i < count($tabMois); $i++) { 
        $resultat .= "<tr><td>" . $tabMois[$i] . "</td>";
        $resultat .= "<td>". $tabJoursMois[$i]."</td></tr>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo9</h2>
    <table>
        <?= $resultat; ?> 
    </table>
</body>
</html>