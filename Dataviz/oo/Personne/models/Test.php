<?php

class Test {

    private $privee = "rouge";
    private $other = "other";

    public function __get($nom) {

        echo "<p>Demande en __get de $nom </p>";
        
        if($nom === "privee") {
            throw new Exception("La propriété $nom ne vous est pas accessible");
        }

        if($nom === "other") {
            throw new Exception("La propriété $nom n'est pas possible d'accès.");
        }

    }

    public function __set(string $name, mixed $value) {
        echo "<p>Essaie de modifier $name par $value</p>";
    }
}

?>