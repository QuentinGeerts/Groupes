<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="?section=home" class="nav-link <?= (isset($_GET['section']) && $_GET['section'] == 'home' ? 'active' : '') ?>" aria-current="page">Voir tous nos clients</a>
        </li>

        <?php

        if (isset($_SESSION['login'])) {
          echo '<li class="nav-item">';
          echo '<a class="nav-link ' . (isset($_GET['section']) && $_GET['section'] == 'insert' ? 'active' : '') .  '" href="?section=insert">Ajouter un client</a>';
          echo '</li>';
        }

        ?>

      </ul>
    </div>

    <div class="d-flex">
      <ul class="navbar-nav">
        <?php
        if (isset($_SESSION['login'])) {
          echo '<li class="navbar-text">';
          echo 'Bonjour ' . $_SESSION['login'];
          echo '</li>';

          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="?section=signout">Déconnexion</a>';
          echo '</li>';
        } else {
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="?section=signin">Connexion</a>';
          echo '</li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>