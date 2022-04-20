<?php 
    $tabExponentiel2 = array();
    $nombre = 2;
    $resultat = "";
    for ($i=0; $i < 10; $i++) { 
        $tabExponentiel2[$i] = $nombre;        
        $resultat .= "<td>" . $tabExponentiel2[$i] . "</td>";
        $nombre = $nombre * 2; //$nombre *= 2;
    }

    //var_dump($tabExponentiel2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exo2</title>
</head>
<body>
    <h2>Exo2</h2>
    <table>
        <tr>
            <?= $resultat; ?> 
        </tr>
    
    </table>
</body>
</html>