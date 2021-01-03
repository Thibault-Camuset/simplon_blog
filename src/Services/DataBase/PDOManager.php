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




    public function count($table) {
        $request = $this->_connexion->prepare("SELECT COUNT(*) FROM $table");
        $request->execute();
        $count = $request->fetch();
        
        return $count[0];
    }

    public function selectAll($table, $nbElement, $offset) {
        $request = $this->_connexion->query("SELECT * FROM $table LIMIT $offset, $nbElement");
        $results = [];
        while ($row = $request->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }
        return $results;
    }

    public function checkUser($table, $userName, $password) {
        $request = $this->_connexion->prepare("SELECT * FROM $table WHERE userName = ?");
        $request->execute([$userName]);
        $result = $request->fetch();

        if($result != false && password_verify($password, $result['userPassword'])) {
            
            $_SESSION['userName'] = $result['userName'];
            if ($result['roleId'] == 1) {
                $_SESSION['userRole'] = 'Admin';
            } else if ($result['roleId'] == 2) {
                $_SESSION['userRole'] = 'Redac';
            } else {
                $_SESSION['userRole'] = 'User';
            }
            header( "refresh:1; url=/" ); 
        } else {
            $_SESSION['errorMessage'] = "Nom d'utilisateur ou mot de passe incorrect";
            header("Refresh:0");
        }
    }

    public function addUser($table, $userName, $email, $password, $firstName, $lastName, $userType) {

        // On vérifie et convertit le type d'utilisateur ici
        if($userType == "admin") {
            $actualusertype = 1;
        } else if($userType == "redac") {
            $actualusertype = 2;
        } else {
            $actualusertype = 3;
        }

        // Requête PDO en deux temps, pour éviter les injections SQL. Ici, on utilise une méthode hash sur le mot de passe pour sécuriser son enregistrement.
        $request = $this->_connexion->prepare("INSERT INTO $table(userName, userEmail, userPassword, userFirstName, userLastName, createdAt, roleId) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $request->execute([$userName, $email, password_hash($password, PASSWORD_BCRYPT), $firstName, $lastName, date('Y-m-d H:i:s'), $actualusertype]);
    }


    public function selectBy($table, $id) {
        $request = $this->_connexion->prepare("SELECT * FROM $table WHERE articleId = ?");
        $request->execute([$id]);
        $result = $request->fetch();
        
        return $result;
    }



    public function orderBy($table, $category) {
        $request = $this->_connexion->prepare("SELECT * FROM $table WHERE categoryName = ?");
        $request->execute([$category]);
        $results = [];
        while ($row = $request->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }
        return $results;
    }

}

    ?>