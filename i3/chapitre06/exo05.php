<?php 
    $tab = array(1, 4, 3, 5, 2);
    $somme = 0;
    $table = "";

    for ($i=0; $i < count($tab); $i++) { 
        $somme = $somme + $tab[$i];
        // $somme += $tab[$i];

        $table .= "<td>" . $tab[$i] . "</td>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo5</h2>
    <table>
        <tr>
            <?= $table; ?> 
        </tr>
    </table>
    <p>La somme  est <?= $somme; ?> </p>
</body>
</html>