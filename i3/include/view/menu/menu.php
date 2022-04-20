<?php 
    if(isset($_SESSION["nom"]))
    {
        echo "<p>Bienvenue " . $_SESSION["nom"] . "<p>";
    }
?>
<nav>
    <ul>
        <li><a href="?section=accueil">Accueil</a></li>
        <li><a href="?section=apropos">A propos</a></li>
        <li><a href="?section=contact">Contact</a></li>
        <?php 
            if(isset($_SESSION["nom"]))
            {
                echo '<li><a href="?section=deconnexion">Déconnexion</a></li>';
            }
            else 
            {
                echo '<li><a href="?section=connexion">Connexion</a></li>';
            }
        ?>
        
        
    </ul>   
</nav>