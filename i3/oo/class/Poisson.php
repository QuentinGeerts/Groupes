<?php 
    class Poisson {
        // ==== propriétés ====
        // nom
        private $nom;
        // couleur
        private $couleur;
        // poids
        private $poids;

        // ==== méthodes =====
        // constructeur
        public function __construct($_nom, $_couleur, $_poids){
            $this->nom = $_nom;
            $this->couleur = $_couleur;
            $this->poids = $_poids;
        }
        // se présenter
        public function sePresenter(){
            echo "<p>Le poids du ".$this->nom." est : ".$this->poids." kg</p>";
        }
        // manger
        public function manger(Poisson $_poisson){
            echo "<p>Le ".$this->nom." mange le ".$_poisson->nom."</p>";
            // mettre à jour les poids
            $this->poids += $_poisson->poids;
            $_poisson->poids = 0;
        }


    }
?>