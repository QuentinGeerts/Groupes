<?php

$result = '';
$table = 1;

while ($table <= 9) {
    $multiplicateur = 1;
    $result .= "<h2>Table de $table</h2>";
    while ($multiplicateur <= 10) {

        $result .= "$table * $multiplicateur = " . ($table * $multiplicateur) . "<br>";

        $multiplicateur++;
    }
    $table ++;
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tables de 1 à 9</title>
</head>

<body>

    <h1>Table de 1 à 9</h1>

    <?= $result; ?>

</body>

</html>