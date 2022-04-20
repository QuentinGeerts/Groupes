<?php

require_once('../models/Personne.php');
require_once('../models/Femme.php');
require_once('../models/Homme.php');

$p = new Personne("P1", "P1", "2021-09-23");
$h = new Homme("H1", "H1", "2021-09-23");
$f = new Femme("F1", "F1", "2021-09-23");

$p->sePresenter();
$f->sePresenter();
$h->sePresenter();


?>