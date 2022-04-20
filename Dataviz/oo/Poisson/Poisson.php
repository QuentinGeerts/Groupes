<?php

class Poisson {
    // Propriétés
    private $nom;
    private $couleur;
    private $poids;

    // Constructeur
    public function __construct($_nom, $_couleur, $_poids)
    {
        $this->nom = $_nom;
        $this->couleur = $_couleur;
        $this->poids = $_poids;
    }

    // Destructeur appelé automatiquement lors de la fin d'exécution du script
    // Ou quand un "unset" est appelé.
    public function __destruct()
    {
        echo "<p>{$this->nom} a été détruit.</p>";
    }

    // Méthodes
    public function sePresenter() {
        echo "<p>Le poids du {$this->nom} ({$this->couleur}) est : {$this->poids} kg</p>";
    }

    public function manger(Poisson $p) {
        echo "<p>Le {$this->nom} mange le {$p->nom}</p>";

        // $this->poids = $this->poids + $p->poids;
        $this->poids += $p->poids;
        $p->poids = 0;
    }
}

?>