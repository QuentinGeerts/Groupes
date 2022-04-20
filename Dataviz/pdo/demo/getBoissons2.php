<?php

// CRUD = Create *Read* Update Delete

require_once('connection.php');

// Requête pour récupérer l'ensemble de mes boissons
$query = "  SELECT id, nom 
            FROM boisson";

// Demander au PDO de faire une requête à la base de données
$obj = $pdo->query($query);

$boissons = $obj->fetchAll();

$table = "";

// Parcourir les données récupérées et afficher chaque champ
foreach ($boissons as $boisson) {
    $table .= "<tr>";
    $table .= "<td>{$boisson['id']}</td>";
    $table .= "<td>{$boisson['nom']}</td>";
    $table .= "</tr>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once('menu.php');

    ?>
    <h1>Mes boissons</h1>

    <table>
        <thead>
            <td>ID</td>
            <td>Nom</td>
        </thead>
        <!-- TR de nos boissons -->
        <?= $table; ?>
        <?php //echo $boissons; 
        ?>
    </table>

</body>

</html>