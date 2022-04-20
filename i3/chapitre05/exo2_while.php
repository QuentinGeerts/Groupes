<?php 
    $resultat = "";
    // initialisation table
    $table = 1;
    // condition table
    while ($table <= 10) 
    {
        $resultat .= "<td>";
        // afficher la table par 1 2...        
        $resultat .= "La table de $table <br>";
        // -->initialisation multiplicateur<--
        $multiplicateur = 1;
        // conditon multiplicateur
        while ($multiplicateur <= 10) 
        {
            // afficher le 1x1 = 1...
            $total = $table*$multiplicateur;
            $resultat .= "$table x $multiplicateur = $total<br>";
            // incrémenter le multiplicateur
            $multiplicateur++;
        }
        $resultat .= "</td>";
        if ($table == 5) {
            $resultat .= "</tr><tr>";
        }
        // incrémenter la table
        $table++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
    <style>
        table {
            border : 1px solid black;
            width:100%;
        }

        td {
            border : 1px solid red;
        }

    </style>
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