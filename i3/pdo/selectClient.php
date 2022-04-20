<?php 
try
{
    $table = "";
    // connexion avec la base de données avec PDO
    $basededonnees = "mysql:host=localhost;dbname=messagerie;charset=utf8";
    $utilisateur = "root";
    $motdepasse = "";
    $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);

    // sélection des données
    $requete = "SELECT nom, prenom FROM personne";
    // affichage des données avec une nouvelle boucle « foreach »
    $personnes = $pdo->query($requete);
    foreach($personnes as $personne)
    {
        $table .= "<tr><td>" . $personne['nom']."</td><td>". $personne['prenom']."</td></tr>";
    }
}
catch(PDOException $e)
{
    echo $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <style>
        table {
            border:1px solid black;
            border-collapse : collapse;
        }
        td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h2>Liste des clients</h2>
    <table>
        <?= $table; ?> 
    </table>
</body>
</html>