<?php 
    $tab = array(1, 4, 3, 5, 2);
    $plusGrand = $tab[0];
    $plusPetit = $tab[0];
    $table = "";

    for ($i=0; $i < count($tab); $i++) { 
        if ($tab[$i] > $plusGrand) {
            $plusGrand = $tab[$i];
        }
        if ($tab[$i] < $plusPetit) {
            $plusPetit = $tab[$i];
        }

        $table .= "<td>" . $tab[$i] . "</td>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo4</h2>
    <table>
        <tr>
            <?= $table; ?> 
        </tr>
    </table>
    <p>Le plus grand est <?= $plusGrand; ?> </p>
    <p>Le plus petit est <?= $plusPetit; ?> </p>
</body>
</html>