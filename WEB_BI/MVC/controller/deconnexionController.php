<?php

// Supprimer la variable de session nom
unset($_SESSION['nom']);

// supprimer la session
session_destroy();

// Rediriger
header('Location:?section=connexion');