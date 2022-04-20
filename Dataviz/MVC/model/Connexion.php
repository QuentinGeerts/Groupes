<?php

class Connexion {

    private static $connection;
    
    public function __construct() 
    {
        $this->dbConnection();
    }

    public function dbConnection() {
        
        if(self::$connection != null) {
            return self::$connection;
        }

        self::$connection = new PDO(
            "mysql:host=localhost;dbname=dataviz;charset=utf8", // DSN
            "root", // User
            "" // Pwd
        );

        return self::$connection;
    }
    
    protected function execute($query, $params = array())
    {
        $obj = self::$connection->prepare($query);
        $obj->execute($params);
        return $obj->fetchAll();
    }

}

?>