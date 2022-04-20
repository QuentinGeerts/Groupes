<?php

session_start();

// Vérifier si le formulaire a été soumis et que la valeur du
// champ pseudo existe
if( isset($_POST['pseudo']) ) {
    
    $pseudo = $_POST['pseudo'];

    // Dans le cas où la vairable de session n'existe pas
    // On la crée
    if( !isset($_SESSION['pseudo'])) {
        $_SESSION['pseudo'] = $pseudo;
        header('Location: index.php');
    }
    else {
        echo "La variable de session existe déjà.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="connect.php" method="post">
        <label for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" id="pseudo">

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>