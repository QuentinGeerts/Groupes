<?php 
    $tab = array(1, 4, 3, 5, 2);

    // afficher avant le tri        
    $tabAvant = "";
    for ($i=0; $i < count($tab); $i++) { 
        $tabAvant .= "<td>".$tab[$i]."</td>";
    }

    // trier le tableau
    for ($i=0; $i < count($tab)-1; $i++) { 
        for ($j=$i+1; $j < count($tab); $j++) { 
            if ($tab[$i]> $tab[$j]) {
                // échanger
                $temp = $tab[$i];
                $tab[$i] = $tab[$j];
                $tab[$j] = $temp;
            }
        }
    }

    // afficher après le tri        
    $tabApres = "";
    for ($i=0; $i < count($tab); $i++) { 
        $tabApres .= "<td>".$tab[$i]."</td>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo12</h2>
    <p>Avant le tri</p>
    <table>
        <tr>
            <?= $tabAvant; ?> 
        </tr>
    </table>

    <p>Après le tri</p>
    <table>
        <tr>
            <?= $tabApres; ?> 
        </tr>
    </table>
</body>
</html>