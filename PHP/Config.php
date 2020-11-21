<!-- Classe Config qui contiendra toutes les informations sensibles, telles que les informations pour se connecter à la base de données,
mais aussi les méthodes utilisées pour protéger les mots de passes des utilisateurs via un hash + salt pour plus de difficultée à les retrouver

En tant normal, ce fichier Config.php ne serait pas partagé publiquement sur un repo Git, ou alors vierge et non rempli, mais ici, pour l'exercice, il le sera! -->



<?php
class Config {

    // Salt pour renfocer la sécurité des mots de passe. Un string de caractère sera ajouté avant, et après le mot de passe de chaque utilisateur, AVANT que le hash ne soit appliqué.
    private static $saltKey1 = "J'aime bien les Poneys";
    private static $saltKey2 = "J'ai cours d'aqua-poney";

    public static function getSaltKey1() {
        return self::$saltKey1;
    }

    public static function getSaltKey2() {
        return self::$saltKey2;
    }




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