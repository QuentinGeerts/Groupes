<?php

$table = "";
$error = "";

try {
    include("database.php");

    $query = "SELECT id, nom, prenom FROM personne;";

    $obj = $pdo->query($query);

    $personnes = $obj->fetchAll();

    if (count($personnes) == 0) {
        $table .= "<tr>";
        $table .= "<td colspan='6'>Aucun résultat</td>";
        $table .= "</tr>";
    } else {

        foreach ($personnes as $personne) {
            $table .= "<tr>";
            $table .= "<td class='center'><a href='read.php?id={$personne['id']}'><i class='fas fa-search'></i></a></td>";
            $table .= "<td class='center'>{$personne['id']}</td>";
            $table .= "<td>{$personne['nom']}</td>";
            $table .= "<td>{$personne['prenom']}</td>";
            $table .= "<td class='center'><a href='update.php?id={$personne['id']}'><i class='fas fa-pencil-alt'></i></a></td>";
            $table .= "<td class='center'><a href='delete.php?id={$personne['id']}'><i class='far fa-trash-alt'></i></a></td>";
            $table .= "</tr>";
        }
    }
} catch (PDOException $e) {
    $error = "<p class='ErrorMessage'>" . $e->getMessage() . "</p>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Client</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

    <?php include("menu.php"); ?>
    <?= $error; ?>

    <div class="container">

        <h1 class="center">Base de données</h1>

        <table>
            <tr>
                <th>Voir</th>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <?= $table; ?>
        </table>

    </div>


</body>

</html>