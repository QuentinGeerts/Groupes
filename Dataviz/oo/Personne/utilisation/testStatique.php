<?php

require_once('../models/Homme.php');
require_once('../models/Femme.php');

echo "<p>Une femme est de sexe : " . Femme::$sexe . "</p>";
echo "<p>Un homme est de sexe : " . Homme::$sexe . "</p>";

Personne::quiEsTu();

$h = new Homme();
$h->quiEsTu();
echo $h->getSexe();
$f = new Femme();
$f->quiEsTu();

?>