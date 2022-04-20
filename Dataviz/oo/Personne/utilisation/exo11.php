<?php

require_once('../models/Personne.php');
require_once('../models/Femme.php');
require_once('../models/Homme.php');

$h = new Homme("Geerts", "Quentin", "1996-04-03");
echo "<p>Il y a " . Personne::getNbPersonnePhrase() . "</p>";

$f = new Femme("Geerts", "Mélanie", "1988-05-09");
echo "<p>Il y a " . Personne::getNbPersonnePhrase() . "</p>";

$h2 = new Homme("Geerts", "Mélanie", "1988-05-09");
echo "<p>Il y a " . Personne::getNbPersonnePhrase() . "</p>";

?>