<?php
// Démarrer la session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

    <h1>Accueil</h1>

    <?php
    
    if(isset($_SESSION['pseudo'])) { 
        echo "Bonjour " . $_SESSION['pseudo']; 
    }
    
    ?>

    <?php
    
    if(!isset($_SESSION['pseudo'])) {
        // Je ne suis pas connecté 
        // => donc j'affiche le lien vers la connexion
        echo '<p>Vous pouvez vous connecter au clien suivant : <a href="connect.php">ici</a></p>';
    } 
    else {
        // Je suis connecté
        // => donc j'affiche le lien vers la déconnexion
        echo '<p>Vous pouvez vous déconnecter au clien suivant : <a href="disconnect.php">ici</a></p>';
    }
    
    ?>

</body>
</html>