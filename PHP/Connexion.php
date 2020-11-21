<!-- Classe Connexion, qui permettra de faire la connexion à la base de données. Elle fait elle même appel à la classe de Config pour récupérer les informations
relative à la base de données et pour s'y connecter. -->

<?php
require('Config.php');

class Connexion {
    public $connexion;

    // Constructor qui permet de faire la connexion, en PDO, directement lorsque l'on fera une new class ailleurs.
    public function __construct() {
        $this->connexion = new PDO("mysql:host=".Config::getDbHost().";dbname=".Config::getDbName(), Config::getDbUser(), Config::getDbPassword());
    }
}
?>