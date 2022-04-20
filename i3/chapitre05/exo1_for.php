<?php 
    $resultat = "";    

    for ($multiplicateur = 1;$multiplicateur <= 10;$multiplicateur++) {
        $resultat .= "2 x $multiplicateur = " . (2*$multiplicateur) . "<br>";
    }
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