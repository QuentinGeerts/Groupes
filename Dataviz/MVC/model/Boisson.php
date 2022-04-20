<?php

require_once('model/Connexion.php');
class Boisson extends Connexion {

    public function read() {
        $query = "SELECT * FROM boisson";
        return $this->execute($query);
    }

    public function delete($_id) {
        $query = "DELETE FROM boisson WHERE id = :id";
        $params = array(":id" => $_id);
        return $this->execute($query, $params);
    }

}

?>