<?php

// Classe qui permettra d'effectuer la connexion à la BDD en PDO.

namespace App\Services\DataBase;

use PDO;

class PDOManager {

    private $_connexion;


    // Connexion établie directement lorsque la classe sera instanciée
    public function __construct() {
        $this->_connexion = new PDO("mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'], $_ENV['DB_USERNAME'] , $_ENV['DB_PASSWORD']);
    }

}

    ?>