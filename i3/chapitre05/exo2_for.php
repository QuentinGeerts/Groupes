<?php 
    $resultat = "";
     
    // initialisation; condition; incrémenter pour table
    for ($table = 1;$table <= 10;$table++) 
    {
        $resultat .= "<td>";
        // afficher la table par 1 2...        
        $resultat .= "La table de $table <br>";
              
        // initialisation; conditon ; incrémentation pour multiplicateur
        for ($multiplicateur = 1;$multiplicateur <= 10;  $multiplicateur++) 
        {
            // afficher le 1x1 = 1...
            $total = $table*$multiplicateur;
            $resultat .= "$table x $multiplicateur = $total<br>";           
        }
        $resultat .= "</td>";
        if ($table == 5) {
            $resultat .= "</tr><tr>";
        }  
        
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