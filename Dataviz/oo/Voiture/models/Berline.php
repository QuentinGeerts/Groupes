<?php

require_once('Voiture.php');

class Berline extends Voiture {

    // Props
    public static $type = "Berline";

    // Méthode
    public function rouler() {
        echo "<p>Je roule en {$this->marque} (" . self::$type . ")</p>";
    }
}

?>