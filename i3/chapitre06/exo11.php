<?php 
    $tabSeptembre =array(20, 20, 20, 20, 24, 19, 18, 17, 16, 17, 17, 18, 17, 17, 14, 15, 16, 16, 16, 17, 17, 19, 17, 20, 19, 20, 21, 21, 24, 17);

    $resultat = "";
    $somme = 0;

    for ($i=0; $i < count($tabSeptembre); $i++) { 
        $resultat .= "<td>" . $tabSeptembre[$i] . "</td>";
        $somme += $tabSeptembre[$i];
    }

    $moyenne = $somme / count($tabSeptembre);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo11</h2>
    <table>
        <tr>
            <?= $resultat ?> 
        </tr>    
    </table>
    <p>La température moyenne est de <?= $moyenne ?>°C</p>    
</body>
</html>