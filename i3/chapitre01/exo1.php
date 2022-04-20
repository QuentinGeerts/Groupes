<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
<?php
// Déclarer et initialiser les 2 variables
$nb1 = 5;
$nb2 = 7;

// Afficher à l'écran : Avant nb1 = 5 et nb2 = 7
echo "<p>Avant nb1 = $nb1 et nb2 = $nb2 </p>";

// procédure échange 2 variables
$nbInt = $nb1;
$nb1 = $nb2;
$nb2 = $nbInt;

// Afficher à l'écran : Après nb1 = 7, et nb2 = 5
echo "<p>Après nb1 = $nb1 et nb2 = $nb2</p>";

?>
</body>
</html>

