<?php
try {
    $message = ""; 
    if(isset($_POST["boisson"]))
    {
        // si il ne contient que des lettresn et au min 3
        if(preg_match("/^[a-zéèêë]{3,}$/i", $_POST["boisson"])> 0)
        {
            $basededonnees = "mysql:host=localhost;dbname=exemples;charset=utf8";
            $identifiant = "root";
            $motdepasse = "";
            $pdo = new PDO($basededonnees, $identifiant, $motdepasse, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $requete = "INSERT INTO boisson (boisson_name) VALUES (:nom)";
            $objet = $pdo->prepare($requete);
            $objet->execute(array(
                ":nom" => trim($_POST["boisson"])    
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
    <h2>Ajouter une boisson</h2>
    <form action="#" method="post">
        <label for="boisson">Entrez la boisson à ajouter :</label>
        <input type="text" name="boisson" id="boisson">
        <input type="submit" value="Enregistrer">
    </form>
    <p style="color:red"><?= $message; ?> </p>
    
</body>
</html>