<?php

// Détruire la variable de session
unset($_SESSION['nom']);

// Supprimer la session
session_destroy();

// Rediriger la personne
header('Location:?section=signin');
