<?php 
class Personne
{
    // propriétés
    private $nom = "Jules";
    private $prenom = "César";
    private $dateNaissance = "100-07-13";
    private $fiance = false;
    private $sexe;

    // méthodes
    public function sePresenter()
    {
        echo "<p>Je m'appelle " . $this->prenom . " " . $this->nom . "</p>";
    }
    public function parler($phrase)
    {
        echo "<p>$phrase</p>" ;
    }
    public function donnerAge()
    {
        $age = date_diff(date_create(date("Y-m-d")), date_create($this->dateNaissance));
        echo $age->format('%y');
    }
    public function demanderEnMariage(Personne $_personne)
    {
        if($this != $_personne){
            echo "<p>Veux-tu m'épouser " . $_personne->prenom . " ?</p>";
        }
        else {
            echo "<p style='color:red'>Vous ne pouvez pas vous demander en mariage !</p>";
        }
        
    }

    public function repondreDemandeMariage(Personne $_personne, $_reponse){
        echo "<p> La réponse vérifée :";
        if($_reponse == "oui")
        {
            // mettre statut fiancé aux 2 fiancés            
            if($this->fiance == false){
                 // Je te dis oui
                $_personne->fiance = true;
                $this->fiance = true;
                echo "Je te dis oui";
            }
            else {
                // Désolé, je suis déjà fiancé
                echo "Désolé, je suis déjà fiancé" . $this->accord();
            }
        }
        else {
            // réponse non
            if($this->fiance == true){
                // Désolé, je suis déjà fiancé
                echo "Désolé, je suis déjà fiancé" . $this->accord();;
            }
            else {
                // C'est non
                echo "C'est non";
            } 
        }
        echo "</p>";
    }

    private function accord(){
        return ($this->sexe == "f")? "e":"";
    }

    public function getFiancePhrase(){
        return (($this->fiance)? "est fiancé": "n'est pas fiancé") . $this->accord();;
    }

    // ======== Les getters et les setters ==
    // -- getter : récupérer
    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getDateNaissance(){
        return $this->dateNaissance;
    }

    // -- setter : mettre à jour
    public function setNom($_nom){
        $this->nom = $_nom;
    }

    public function setPrenom($_prenom){
        $this->prenom = $_prenom;
    }

    public function setDateNaissance($_dateNaissance){
        $this->dateNaissance = $_dateNaissance;
    }

    public function setFiance($_fiance){
        $this->fiance = $_fiance;
    }

    public function setSexe($_sexe){
        $this->sexe = $_sexe;
    }



}
    
?>