<?php

class Config {

    // Salt pour renfocer la sécurité des mots de passe.
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
    private static $dbName = "blog";
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