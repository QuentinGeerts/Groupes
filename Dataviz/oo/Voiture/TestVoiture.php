<?php

require_once('models/ToutTerrain.php');
require_once('models/Berline.php');

$berlin = new Berline('Audi');
$toutTerrain = new ToutTerrain('Suzuki');

$berlin->rouler();
$toutTerrain->rouler();

?>