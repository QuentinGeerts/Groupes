<?php 
    $tabEntiers = array(1, 2, 3, 4, 5, 6);
    $resultat = "";

    for ($i=0; $i < count($tabEntiers); $i++) { 
        $resultat .= $tabEntiers[$i] . "<br>";
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