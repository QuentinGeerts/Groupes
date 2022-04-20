<?php

require_once('Voiture.php');

class ToutTerrain extends Voiture {

    // Props
    public static $type = "Tout terrain";

    public function rouler() {
        echo "<p>Je roule en {$this->marque} (" . self::$type . ")</p>";
    }
}

?>