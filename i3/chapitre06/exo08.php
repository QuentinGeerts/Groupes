<?php 
    $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");

    $resultat = "";
    for ($i=count($tabMois)-1; $i >= 0; $i--) { 
        $resultat .= "<tr><td>" . $tabMois[$i] . "</td></tr>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo8</h2>
    <table>
        <?= $resultat; ?> 
    </table>
</body>
</html>