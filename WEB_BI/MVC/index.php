<?php
// Démarrer la session
session_start();

// Pour pouvoir utiliser le header()
ob_start();

// En-tête HTML + Body
include('view/html/head.php');

// Menu de navigation
include('view/menu/menu.php');

// Router qui redirige vers toutes les pages
include('controller/router.php');

// Fin HTML + Body
include('view/html/footer.php');