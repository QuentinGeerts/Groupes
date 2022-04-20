<?php

abstract class Voiture {

    // Props
    public $marque;

    public function __construct($_marque)
    {
        $this->marque = $_marque;
    }

    // Méthode
    // A redéfinir dans les classes enfants
    abstract public function rouler();
    
}

?>