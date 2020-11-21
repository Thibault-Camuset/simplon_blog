<?php 

require('Connexion.php');

class UserManager {
    public $newconnexion;

    public function __construct() {
        $this->newconnexion = new Connexion();
    }

    public function addUser($email, $password, $firstName, $lastName, $userType) {

        if($userType == "user") {
            $actualusertype = 1;
        } else {
            $actualusertype = 2;
        }

        $request = $this->newconnexion->connexion->prepare('INSERT INTO users(userEmail, userPassword, userFirstName, userLastName, createdAt, enabled, roleId) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $request->execute([$email, hash('sha256', Config::getSaltKey1().$password.Config::getSaltKey2()), $firstName, $lastName, date('Y-m-d H:i:s'), 1, $actualusertype]);
    }

}

?>