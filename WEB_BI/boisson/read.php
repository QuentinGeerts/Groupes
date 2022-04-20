<?php

$table = "";
$nbDrinks = 0;

include('database.php');

// Récupérer mes boissons

$query = "SELECT * FROM boisson";

$obj = $pdo->query($query);

$boissons = $obj->fetchAll();

$nbDrinks = count($boissons);

if ($boissons) {
    foreach ($boissons as $boisson) {
        $table .= "<tr>";
        $table .= "<td>" . $boisson['id'] . "</td>";
        $table .= "<td>" . $boisson['nom'] . "</td>";
        $table .= "</tr>";
    }
} else {
    $table .= "<tr><td colspan='2'>Aucun résultat</td></tr>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Read</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('menu.php'); ?>

    <?= $status; ?>

    <div class="container">

        <h1>Read</h1>

        <p>Nombre de boissons : <?= $nbDrinks; ?></p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                <?= $table; ?>
            </tbody>
        </table>

    </div>


</body>

</html>