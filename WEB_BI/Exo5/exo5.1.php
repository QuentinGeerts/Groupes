<?php

$result = '';
$table = 2;
// Initialisation
$multiplicateur = 1;

// Condition
while ($multiplicateur <= 10) {

    $result .= "$table * $multiplicateur = " . ($table * $multiplicateur) . "<br>";

    // Incrémentation
    $multiplicateur ++;
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Table par 2</title>
</head>

<body>

    <h2>Table par 2</h2>

    <?= $result ; ?>

</body>

</html>