<?php

require_once('../models/Femme.php');
require_once('../models/Homme.php');

echo "Femme";
$f = new Femme('D\'Egypte', 'Cleopatre', '110-08-15');
$f->voir();
$f->entendre();

echo "Homme";
$h = new Homme('Jules', 'César', '100-07-13');
$h->voir();
$h->entendre();

?>