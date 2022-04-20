<?php
try {

    $basededonnees = "mysql:host=localhost;dbname=exemples;charset=utf8";
    $identifiant = "root";
    $motdepasse = "";
    $pdo = new PDO($basededonnees, $identifiant, $motdepasse);
    // sélection des données
    // ---récupérer les différentes boisssons pour générer les options---
    $requete = "SELECT boisson_id, boisson_name FROM boisson ORDER BY boisson_id";
    // récupérer les données sous forme d'un tableau
    $objet = $pdo->query($requete);
    $boissons = $objet->fetchAll(PDO::FETCH_KEY_PAIR);
    // var_dump($boissons);
    // die;
    $options = "";
    foreach ($boissons as $id => $nom)
    { 
        $options .= "<option value='$id'>$nom</option>"; 
    }
    // --- fin différentes boisson---
    $message = ""; 
    if(isset($_POST["boisson"], $_POST["choix"]))
    {
        // si il ne contient que des lettresn et au min 3
        if(preg_match("/^[a-zéèêë]{3,}$/i", $_POST["boisson"])> 0)
        {            
            $requete = "UPDATE boisson SET boisson_name = :nom WHERE boisson_id=:choix";
            $objet = $pdo->prepare($requete);
            $objet->execute(array(
                ":nom" => trim($_POST["boisson"]),
                ":choix" => trim($_POST["choix"])    
            ));
        }
        else {
            $message = "Erreur : votre boisson ne correspond au format attendu";
        }        
    
    }
}
catch(PDOException $e)
{
    $message .= $e->getMessage();
}



    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="read.php">Voir mes boissons</a></p>
    <h2>Modifier une boisson</h2>
    <form action="#" method="post">
        <label for="choix">Choisissez la boisson à modifier</label>
        <select name="choix" id="choix">
            <?= $options; ?> 
        </select>
        <label for="boisson">Entrez la boisson à ajouter :</label>
        <input type="text" name="boisson" id="boisson">
        <input type="submit" value="Enregistrer">
    </form>
    <p style="color:red"><?= $message; ?> </p>
    
</body>
</html>