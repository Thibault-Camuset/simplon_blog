<?php

// Gestion de l'autoload de composer
require __DIR__ . '/../vendor/autoload.php';

// Gestion du .env et des données de connexion à la BDD
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

// Use des différentes classes nécessaires au fonctionnement
use App\Services\DataBase\DBManagerInterface;
use App\Services\DataBase\PDOManager;
use App\Controller\DefaultController;
use App\Controller\ArticleController;

// On définit les controlleurs et leur utilisation
$controller = isset($_GET['c']) && $_GET['c'] ? $_GET['c'] : 'default';
$action = isset($_GET['a']) && $_GET['a'] ? $_GET['a'] : 'list';


if (isset($_GET['admin'])) {
    if(!isset($_SESSION['user']) || !$_SESSION['user']) {
    // verif connexion admin
    } else {
    // redirection accueil
    }
}

switch ($controller) {
    case 'article':

        $productController = new ArticleController();
        switch ($action) {
            case 'list':
                $productController->search();
                break;
            case 'search':
                $productController->search();
                break;
            case 'add':
                $productController->add();
                break;    
            case 'delete':
                $productController->delete();
                break;
        }

        break;

    case 'categories':
        break;

    case 'default':
    default:
        $defaultController = new DefaultController();
        $defaultController->home();
        break;
}

?>