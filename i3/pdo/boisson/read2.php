<?php 

    // connexion avec la base de données avec PDO
    $basededonnees = "mysql:host=localhost;dbname=exemples;charset=utf8";
    $utilisateur = "root";
    $motdepasse = "";
    $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);

    // sélection des données
    $requete = "SELECT boisson_id, boisson_name FROM boisson";
    // affichage des données avec une nouvelle boucle « foreach »
    $boissons = $pdo->query($requete);
    $table = "";
    foreach($boissons as $boisson)
    {
        $table .= "<tr><td>" . $boisson['boisson_id']."</td>";
        $table .= "<td>" . $boisson['boisson_name']."</td></tr>";
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read boisson</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Mes boissons</h1>
    <table>
        <?= $table; ?> 
    </table>
</body>
</html>