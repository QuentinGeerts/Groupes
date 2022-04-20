<?php 
// importer la classe personne
require_once("Personne.php");
    // une femme qui est une personne
class Femme extends Personne {
    // --- propriété
    // peut être enceinte
    private $estEnceinte = false;

    // --- méthodes
    public function __construct(){
        $this->setSexe("f");
    }
    // accouche
    public function accoucher(){
        echo "<p>J'accouche</p>";
        $this->estEnceinte = false;
        $nb = random_int(0,1);
        if($nb ==1){
            echo "<p style='color:red'>C'est une fille</p>";
        }
        else {
            echo "<p style='color:blue'>C'est un garçon</p>";
        }

    }
    // getEnceinte
    public function getEnceinte(){
        return $this->estEnceinte;
    }
    // setEnceinte
    public function setEstEnceinte($_estEnceinte){
        $this->estEnceinte = $_estEnceinte;
    }
    // jeSuis... enceinte/pas enceinte
    public function jeSuis(){
        if($this->estEnceinte){
            echo "<p>Je suis enceinte</p>";
        }
        else {
            echo "<p>Je ne suis pas enceinte</p>";
        }
    }
}
    


?>