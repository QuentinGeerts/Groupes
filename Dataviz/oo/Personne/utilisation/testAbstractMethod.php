<?php

require_once('../models/Homme.php');
require_once('../models/Femme.php');

$h = new Homme("P1", "P1", "2021-09-23");
$f = new Femme("P1", "P1", "2021-09-23");

$h->rire();
$f->rire();
$h->sePresenter();

?>