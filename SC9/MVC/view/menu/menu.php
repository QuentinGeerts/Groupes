<nav>
    <ul>
        <li><a href="?section=accueil">Accueil</a></li>
        <li><a href="?section=apropos">A propos</a></li>
        <li><a href="?section=contact">Contact</a></li>

        <?php
        if (isset($_SESSION['nom'])) {
            echo '<div class="right">';
            echo '<li><span>Bienvenue ' . $_SESSION['nom'] . '</span></li>';
            echo '<li><a href="?section=deconnexion">Déconnexion</a></li>';
            echo '</div>';
        } else {
            echo '<li class="right"><a href="?section=connexion">Connexion</a></li>';
        }

        ?>



    </ul>
</nav>