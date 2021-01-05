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
use App\Controller\UserController;

// On définit les controlleurs et leur utilisation
$controller = isset($_GET['c']) && $_GET['c'] ? $_GET['c'] : 'default';
$action = isset($_GET['a']) && $_GET['a'] ? $_GET['a'] : 'list';


switch ($controller) {
    case 'article':

        $articleController = new ArticleController();
        switch ($action) {
            case 'list':
                $articleController->list();
                break;
            case 'read':
                $articleController->selectBy($_GET['id']);
                break;
            case 'edit':
                $articleController->edit($_GET['id']);
                break;
            case 'redac':
                $articleController->redac();
                break;
            case 'search':
                $articleController->search();
                break;
            case 'add':
                $articleController->add();
                break;    
            case 'delete':
                $articleController->delete($_GET['id']);
                break;
        }

        break;

    case 'user':

        $userController = new UserController();
        switch ($action) {
            case 'login':
                $userController->login();
                break;
            case 'logout':
                $userController->logout();
                break;
            case 'register':
                $userController->register();
                break;
            case 'admin':
                $userController->admin('');
                break;
            case 'delete':
                $userController->delete($_GET['id']);
                break;
            case 'adminarticles':
                $userController->admin('adminarticles');
                break;
            case 'adminusers':
                $userController->admin('adminusers');
                break;
            case 'adminpictures':
                $userController->admin('adminpictures');
                break;
            case 'admincategories':
                $userController->admin('admincategories');
                break;
        }
        break;

    case 'category':
        $articleController = new ArticleController();
        switch ($action) {
        case 'Tech':
            $articleController->orderBy('Tech');
        break;
        case 'Code':
            $articleController->orderBy('Code');
        break;
        case 'Games':
            $articleController->orderBy('Games');
        break;
        case 'Series':
            $articleController->orderBy('Series');
        break;
        case 'Science':
            $articleController->orderBy('Science');
        break;

        }
        break;

    case 'default':
    default:
        header("Location: /article/list");
        break;
}

?>