<?php 
    $tabSeptembre =array(20, 20, 20, 20, 24, 19, 18, 17, 16, 17, 17, 18, 17, 17, 14, 15, 16, 16, 16, 17, 17, 19, 17, 20, 19, 20, 21, 21, 24, 17);

    $resultat = "";

    for ($i=0; $i < count($tabSeptembre); $i++) { 
        $resultat .= ($i+1) . " septembre " . $tabSeptembre[$i] . "°C<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo10</title>
</head>
<body>
    <h2>Exo10</h2>
    <?= $resultat ?> 
</body>
</html>