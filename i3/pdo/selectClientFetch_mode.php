<?php 

    // connexion avec la base de données avec PDO
$basededonnees = "mysql:host=localhost;dbname=messagerie;charset=utf8";
$identifiant = "root";
$motdepasse = "";
$pdo = new PDO($basededonnees, $identifiant, $motdepasse);
// sélection des données
$requete = "SELECT nom, prenom FROM personne";
// récupérer les données sous forme d'un tableau
$objet = $pdo->query($requete);
$personnes = $objet->fetchAll(PDO::FETCH_KEY_PAIR);
// var_dump($personnes);

$table = "";
foreach ($personnes as $nom => $prenom)
{ 
    $table .= "<tr><td>$nom</td><td>$prenom</td></tr>"; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Toutes les informations des clients</h2>
    <table>
        <?= $table; ?> 
    </table>
</body>
</html>