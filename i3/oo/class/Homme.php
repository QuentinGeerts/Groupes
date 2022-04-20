<?php 
require_once("Personne.php"); // permet d'inclure une fois la classe
class Homme extends Personne {
    // propriétés
    private $longueurBarbe = 3;

    public function __construct(){
        $this->setSexe("m");
    }
    
    // méthodes
    public function seRaser(){
        $this->longueurBarbe = 0;
    }
    public function getLongueurBarbe(){
        return $this->longueurBarbe;
    }

    public function jeSuis()
    {
        echo "Je suis un homme et je m'appelle " . $this->nom;
    }

}

    
?>