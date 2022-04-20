<?php
$table = "";

try {
    $basededonnees = "mysql:host=localhost;dbname=boisson;charset=utf8";
    $user = "root";
    $pwd = "";

    $pdo = new PDO($basededonnees, $user, $pwd);

    $query = "SELECT * FROM boisson;";

    $obj = $pdo->query($query);

    $boissons = $obj->fetchAll();

    if (count($boissons) == 0) {
        $table .= "<tr><td colspan=\"2\">Aucun résultat</td></tr>";
    }
    else {
        foreach ($boissons as $boisson) {
            $table .= "<tr>";
            $table .= "<td>" . $boisson['id'] . "</td>";
            $table .= "<td>" . $boisson['name'] . "</td>";
            $table .= "</tr>";
        }
    }
    
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Boisson</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include("menu.php"); ?>

    <div class="container">
        <h1>Tableau : boissons</h1>

        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
            </tr>
            <?= $table ?>
        </table>


    </div>
</body>

</html>