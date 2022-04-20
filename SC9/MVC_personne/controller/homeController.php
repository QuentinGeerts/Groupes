<?php
if (isset($_SESSION['login'])) {
    $table = '<tr class="center">
    <th>Voir</th>
    <th>Id</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Modifier</th>
    <th>Supprimer</th>
    </tr>';
} else {
    $table = '<tr class="center">
    <th>Voir</th>
    <th>Id</th>
    <th>Nom</th>
    <th>Prénom</th>
    </tr>';
}
$message = "";

try {
    // Connexion à la base de données
    include("controller/connection/databaseController.php");

    // Préparation de la requête SQL
    $query = "SELECT id, nom, prenom FROM personne;";

    // Demande au PDO de réaliser une requête et récupération du résultat dans une variable $obj (qui est un objet)
    $obj = $pdo->query($query);

    // Transformation de cet objet en tableau
    $personnes = $obj->fetchAll();

    // Vérification du contenu du tableau
    if (count($personnes) == 0) {
        $table .= "<tr>";
        $table .= "<td colspan='6'>Aucun résultat</td>";
        $table .= "</tr>";
    } else {
        // Affichage différent si nous sommes connectés ou non
        if (isset($_SESSION['login'])) {
            foreach ($personnes as $personne) {
                $table .= "<tr>";
                $table .= "<td class='center'><a href='?section=read&id={$personne['id']}'><i class='fas fa-search'></i></a></td>";
                $table .= "<td class='center'>{$personne['id']}</td>";
                $table .= "<td>{$personne['nom']}</td>";
                $table .= "<td>{$personne['prenom']}</td>";
                $table .= "<td class='center'><a href='?section=update&id={$personne['id']}'><i class='fas fa-pencil-alt'></i></a></td>";
                $table .= "<td class='center'><a href='?section=delete&id={$personne['id']}'><i class='far fa-trash-alt'></i></a></td>";
                $table .= "</tr>";
            }
        } else {
            foreach ($personnes as $personne) {
                $table .= "<tr>";
                $table .= "<td class='center'><a href='?section=read&id={$personne['id']}'><i class='fas fa-search'></i></a></td>";
                $table .= "<td class='center'>{$personne['id']}</td>";
                $table .= "<td>{$personne['nom']}</td>";
                $table .= "<td>{$personne['prenom']}</td>";
                $table .= "</tr>";
            }
        }
    }
} catch (PDOException $e) {
    $message = '<div class="alert alert-danger" role="alert">';
    $message .= $e->getMessage();
    $message .= '</div>';
}

// Inclure la vue de l'accueil
include('view/page/home.php');
