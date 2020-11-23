<!-- Classe Config qui contiendra toutes les informations sensibles, telles que les informations pour se connecter à la base de données,
mais aussi les méthodes utilisées pour protéger les mots de passes des utilisateurs via un hash + salt pour plus de difficultée à les retrouver

En tant normal, ce fichier Config.php ne serait pas partagé publiquement sur un repo Git, ou alors vierge et non rempli, mais ici, pour l'exercice, il le sera! -->



<?php
class Config {

    // Information de connexion à la base de données. 
    private static $dbHost = "localhost";
    private static $dbName = "simplon_blog";
    private static $dbUser = "root";
    private static $dbPassword = "";

    public static function getDbHost() {
        return self::$dbHost;
    }

    public static function getDbName() {
        return self::$dbName;
    }

    public static function getDbUser() {
        return self::$dbUser;
    }

    public static function getDbPassword() {
        return self::$dbPassword;
    }

}
?>