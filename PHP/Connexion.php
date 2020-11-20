<?php

class Connexion {
    public $connexion;

    public function __construct() {
        $this->connexion = new PDO("mysql:host=localhost;dbname=blog","root","");
    }
}

?>