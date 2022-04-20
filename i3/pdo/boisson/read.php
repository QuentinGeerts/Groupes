<?php 
    // lire/récupérer des données
    // connexion avec la base de données avec PDO
$basededonnees = "mysql:host=localhost;dbname=exemples;charset=utf8";
$identifiant = "root";
$motdepasse = "";
$pdo = new PDO($basededonnees, $identifiant, $motdepasse);
// sélection des données
$requete = "SELECT boisson_id, boisson_name FROM boisson ORDER BY boisson_id";
// récupérer les données sous forme d'un tableau
$objet = $pdo->query($requete);
$boissons = $objet->fetchAll(PDO::FETCH_KEY_PAIR);
// var_dump($boissons);
// die;
$table = "";
foreach ($boissons as $id => $nom)
{ 
    $table .= "<tr><td>$id</td><td>$nom</td></tr>"; 
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