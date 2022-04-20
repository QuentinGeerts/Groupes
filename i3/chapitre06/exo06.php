<?php 
    $tab = array(1, 4, 3, 5, 2);
    $somme = 0;
    $table = "";

    for ($i=0; $i < count($tab); $i++) { 
        $somme = $somme + $tab[$i];
        // $somme += $tab[$i];

        $table .= "<td>" . $tab[$i] . "</td>";
    }
    $moyenne = $somme / count($tab);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo6</h2>
    <table>
        <tr>
            <?= $table; ?> 
        </tr>
    </table>
    <p>La moyenne  est <?= $moyenne; ?> </p>
</body>
</html>