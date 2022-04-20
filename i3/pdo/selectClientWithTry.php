<?php 

    // connexion avec la base de données avec PDO
    $basededonnees = "mysql:host=localhost;dbname=messageri;charset=utf8";
    $utilisateur = "root";
    $motdepasse = "";
    $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);

    // sélection des données
    $requete = "SELECT nom, prenom FROM personne";
    // affichage des données avec une nouvelle boucle « foreach »
    $personnes = $pdo->query($requete);
    foreach($personnes as $personne)
    {
        echo $personne['nom']." ";
        echo $personne['prenom']."<br>";
    }



?>