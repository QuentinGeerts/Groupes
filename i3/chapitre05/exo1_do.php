<?php 
    $resultat = "";
    $multiplicateur = 1;

    do {
        $resultat .= "2 x $multiplicateur = " . (2*$multiplicateur) . "<br>";
        $multiplicateur++;
        // $multiplicateur = $multiplicateur + 1;
        // $multiplicateur += 1;
    }while ($multiplicateur <= 10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
    <h2>Exo1</h2>
    <?= $resultat; ?> 
</body>
</html>