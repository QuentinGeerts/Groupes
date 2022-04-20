<?php

// Import de la classe Personne pour pouvoir l'utiliser
require_once('Personne.php');
require_once('ISens.php');

// Classe Femme hérite de la classe Personne
// Classe fille ou enfant
class Femme extends Personne implements ISens {

    // Propriétés
    // Propriété privée = Accessible uniquement dans la classe Femme
    // Par défaut : false, pas enceinte.
    private $estEnceinte = false;

    public static $sexe = "F";

    // Getters & Setters
    // Getter : Fonction permettant de récupérer la valeur d'une propriété à l'extérieur de la classe
    public function getEstEnceinte() {
        return $this->estEnceinte;
    }
    
    public function getSexe() {
        return self::$sexe;
    }
    
    // Setter : Fonction permettant de modifier la valeur d'une propriété à l'extérieur de la classe
    public function setEstEnceinte($estEnceinte) {
        $this->estEnceinte = $estEnceinte;
    }

    // Méthodes
    public function accoucher() {
        echo "<p>J'accouche</p>";
        $this->estEnceinte = false;

        // Génération d'un nombre entre 0 et 1 pour générer l'aléatoire dans le choix garçon / fille
        $nb = random_int(0, 1);

        if ($nb == 0) {
            echo "<p style='color:red'>C'est une fille</p>";
        } else {
            echo "<p style='color:blue'>C'est une garçon</p>";
        }
    }

    public function getEnceinte() {
        return ($this->estEnceinte) 
            ? "<p>Je suis enceinte</p>" 
            : "<p>Je ne suis pas enceinte</p>";
    }

    public function sePresenter() {
        parent::sePresenter();
        echo "<p>Je suis une femme.</p>";
    }

    public function rire() {
        echo "<p>Hihihi</p>";
    }

    // Méthodes implémentées depuis l'interface ISens
    // OBLIGATION DE LES IMPLÉMENTÉES
    public function voir() {
        echo "<p>J'ai une vision périphérique</p>";
    }
    
    public function entendre() {
        echo "<p>J'entends tout</p>";
    }
}

?>