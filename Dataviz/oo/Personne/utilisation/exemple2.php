<?php

require_once('../models/Femme.php');
require_once('../models/Homme.php');

$jules = new Homme();
$jules->setNom('Jules');
$jules->setPrenom('César');

$cleopatre = new Femme();
$cleopatre->setNom('D\'Egypte');
$cleopatre->setPrenom('Cléopâtre');

$jules->demanderEnMariage($cleopatre);

?>