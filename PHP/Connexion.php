<?php

require('Config.php');

class Connexion {
    public $connexion;

    public function __construct() {
        $this->connexion = new PDO("mysql:host=".Config::getDbHost().";dbname=".Config::getDbName(), Config::getDbUser() , Config::getDbPassword() );
    }
}

?>