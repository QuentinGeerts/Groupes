<?php

// Import de la classe Personne pour pouvoir l'utiliser
require_once('Personne.php');
require_once('ISens.php');

// Classe Homme hérite de la classe Personne
// Classe fille ou enfant
class Homme extends Personne implements ISens {

    // Propriétés
    private $longueurBarbe = 3;
    public static $sexe = "H";

    // Getters 
    public function getSexe() {
        return self::$sexe;
    }
    
    // Méthodes
    public function seRaser() {
        $this->longueurBarbe = 0;
    }

    public function getLongueurBarbe() {
        return $this->longueurBarbe;
    }

    public function sePresenter() {
        parent::sePresenter();
        echo "<p>Je suis un homme.</p>";
    }

    public function rire() {
        echo "<p>Hahaha</p>";
    }

    // Méthodes implémentées depuis l'interface ISens
    // OBLIGATION DE LES IMPLÉMENTÉES
    public function voir() {
        echo "<p>Je suis venu, j'ai vu, j'ai vaincu</p>";
    }
    
    public function entendre() {
        echo "<p>J'entends ce que je veux</p>";
    }
}

?>