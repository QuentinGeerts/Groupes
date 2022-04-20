<?php 
$table = "";
    // connexion avec la base de données avec PDO
$basededonnees = "mysql:host=localhost;dbname=messagerie;charset=utf8";
$identifiant = "root";
$motdepasse = "";
$pdo = new PDO($basededonnees, $identifiant, $motdepasse);
// sélection des données
$requete = "SELECT * FROM personne";
// récupérer les données sous forme d'un tableau
$objet = $pdo->query($requete);
$personnes = $objet->fetchAll();
var_dump($personnes);
// via nom de la colonne
// for($i = 0; $i < count($personnes);$i++)
// {
//     echo $personnes[$i]["nom"] . " " . $personnes[$i]["prenom"] . "<br>";
// }

// via l'indice de la colonne
// pour chaque ligne
for($i = 0; $i < count($personnes);$i++)
{
    $table .= "<tr>";
    // pour chaque colonne
    for($j = 0; $j < count($personnes[$i])/2; $j++)
    {
        $table .= "<td>" . $personnes[$i][$j] . "</td>";
    }
    $table .= "</tr>";
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