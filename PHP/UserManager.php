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
    public function addUser($userName, $email, $password, $firstName, $lastName, $userType) {

        // On vérifie et convertit le type d'utilisateur ici
        if($userType == "admin") {
            $actualusertype = 1;
        } else if($userType == "redac") {
            $actualusertype = 2;
        } else {
            $actualusertype = 3;
        }

        // Requête PDO en deux temps, pour éviter les injections SQL. Ici, on utilise une méthode hash sur le mot de passe, avec des clés secrètes dans le fichier config, par sécurité.
        $request = $this->newconnexion->connexion->prepare('INSERT INTO users(userName, userEmail, userPassword, userFirstName, userLastName, createdAt, roleId) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $request->execute([$userName, $email, password_hash(Config::getSaltKey1().$password.Config::getSaltKey2(), PASSWORD_BCRYPT), $firstName, $lastName, date('Y-m-d H:i:s'), $actualusertype]);

        // hash('sha256', Config::getSaltKey1().$password.Config::getSaltKey2())
        password_hash(Config::getSaltKey1().$password.Config::getSaltKey2(), PASSWORD_BCRYPT)
    }




    public $errormessage;


    // Fonction pour vérifier l'utilisateur/mot de passe de la personne qui essaie de se connecter.
    public function checkUser($userName, $password) {

        $request = $this->newconnexion->connexion->prepare('SELECT * FROM users WHERE userName = ? AND userPassword = ?');
        $request->execute([$userName, password_hash(Config::getSaltKey1().$password.Config::getSaltKey2(), PASSWORD_BCRYPT)]);
        $result = $request->fetch();

        if($result != false) {
            $_SESSION['userName'] = $result['userName'];
            header( "refresh:1; url=./index.php" ); 
        } else {
            $_SESSION['errorMessage'] = "Nom d'utilisateur ou mot de passe incorrect";
            header("location:./login.php"); 
        }
    }

    // public function setErrorMessage($actualerrormessage) {
    //     $this->errormessage = $actualerrormessage;
    // }

    // public function getErrorMessage() {
    //     return $this->errormessage;
    // }

}
?>