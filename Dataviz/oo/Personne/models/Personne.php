<?php

// Classe Personne (Classe mère de Femme et Homme)
abstract class Personne
{

    // Propriétés
    // Protected : Accessible uniquement dans la classe mère et filles
    // Variable d'instance
    protected $nom;
    protected $prenom;
    protected $dateNaissance;
    protected $fiance = false;

    // Variable de classe
    public static $nbPersonnes = 0;

    // Constructeur
    // Constructeur personnalisé (remplace le constructeur par défaut [vide])
    // Paramètre reçu lors de la création de l'objet dans le programme principal
    // Permet d'initialiser les différents champs de l'objet à sa création
    public function __construct($_nom, $_prenom, $_dateNaissance)
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->dateNaissance = $_dateNaissance;
        // Appel d'une propriété static dans la classe
        // Self = Personne dans ce contexte
        self::$nbPersonnes++;
    }

    // Getters & Setters

    // Getter : Fonction permettant de récupérer la valeur d'une propriété à l'extérieur de la classe
    // Setter : Fonction permettant de modifier la valeur d'une propriété à l'extérieur de la classe
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($_nom)
    {
        $this->nom = $_nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($_prenom)
    {
        $this->prenom = $_prenom;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($_dateNaissance)
    {
        $this->dateNaissance = $_dateNaissance;
    }

    public function getFiance()
    {
        return $this->fiance;
    }

    public function setFiance($_fiance)
    {
        $this->fiance = $_fiance;
    }

    // Méthodes
    public function sePresenter()
    {
        echo "<p>Je m'appelle "
            . $this->prenom . " "
            . $this->nom
            . "</p>";
    }

    public function parler($phrase)
    {
        echo "<p>$phrase</p>";
    }

    public function donnerAge()
    {
        $age = date_diff(                       // Différence entre
            date_create(date("Y-m-d")),         // Date d'aujourd'hui
            date_create(
                $this->dateNaissance    // Date de naissance
            )
        );

        echo $age->format('%y') . ' ans';
    }

    public function demanderEnMariage(Personne $_personne)
    {
        if ($this != $_personne) {
            echo "<p>Veux-tu m'épouser " . $_personne->prenom . "?</p>";
        } else {
            echo "<p style='color:red'>Vous ne pouvez pas vous demander en mariage !</p>";
        }
    }

    public function repondreDemandeMariage(Personne $_personne, $_reponse)
    {
        echo "<p>La réponse est : " . $_reponse . "</p>";

        if ($_reponse == "oui") {

            if (!$this->fiance) {
                $this->fiance = true;
                $_personne->fiance = true;
            } else {
                echo "<p>Désolé, je suis déjà fiancé" . $this->accord() . "</p>";
            }
        } else {
            if (!$this->fiance) {
                echo "<p>C'est non</p>";
            } else {
                echo "<p>Désolé, je suis déjà fiancé" . $this->accord() . "</p>";
            }
        }
    }

    public function getFiancePhrase()
    {
        echo "<p>" . (($this->fiance)
            ? $this->prenom . " est fiancé" . $this->accord()
            : $this->prenom . " n'est pas fiancé" . $this->accord()) . "</p>";
    }

    private function accord()
    {
        return $this->sexe == 'F' ? "e" : "";
    }

    public static function quiEsTu()
    {
        echo "<p>Je suis une personne</p>";
    }

    public static function getNbPersonnePhrase() {
        return self::$nbPersonnes . " personne" . (self::$nbPersonnes > 1 ? "s" : "" );
    }

    abstract public function rire();
}
