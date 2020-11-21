<!-- Classe UserManager, qui servira à faire les requêtes relatives à l'ajout, la suppression, et la vérification des informations relatives aux utilisateurs, comme ajouter
un nouvel utilisateur, en supprimer un, ou bien pour un utilisateur existant tentant de se connecter au blog. -->

<?php 

require('Connexion.php');

class UserManager {
    public $newconnexion;

    public function __construct() {
        $this->newconnexion = new Connexion();
    }

    // Fonction servant à valider le formulaire d'ajout de nouvel utilisateur
    public function addUser($email, $password, $firstName, $lastName, $userType) {

        // On vérifie et convertit le type d'utilisateur ici
        if($userType == "user") {
            $actualusertype = 1;
        } else {
            $actualusertype = 2;
        }

        // Requête PDO en deux temps, pour éviter les injections SQL. Ici, on utilise une méthode hash sur le mot de passe, avec des clés secrètes dans le fichier config, par sécurité.
        $request = $this->newconnexion->connexion->prepare('INSERT INTO users(userEmail, userPassword, userFirstName, userLastName, createdAt, enabled, roleId) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $request->execute([$email, hash('sha256', Config::getSaltKey1().$password.Config::getSaltKey2()), $firstName, $lastName, date('Y-m-d H:i:s'), 1, $actualusertype]);
    }

}

?>