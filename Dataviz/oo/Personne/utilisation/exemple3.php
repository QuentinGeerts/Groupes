<?php

require_once('../models/Personne.php');

$p = new Personne("Geerts", "Quentin", "1996-04-03");
$p->sePresenter();

?>