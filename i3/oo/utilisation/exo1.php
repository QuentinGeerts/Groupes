<?php 
// importer la classe
require_once("../class/Femme.php");
// créer une femme
$f = new Femme();
// vérifier si enceinte
$f->jeSuis();
// mettre enceinte
$f->setEstEnceinte(true);
// verifier si enceinte
$f->jeSuis();
// accoucher + sexe bébé (bonus)
$f->accoucher();
// vérifier si enceinte
$f->jeSuis();
?>