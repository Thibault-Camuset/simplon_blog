<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use App\Services\DataBase\PDOManager;
use App\Model\Article;

class UserController {

    private $userRepository;

    public function __construct() {
        $dbManager = new PDOManager();
        $this->userRepository = new UserRepository($dbManager);
    }

    public function login() {
        $title = 'Login'; 
        require __DIR__ . '/../Views/users/login.php';
    }

    public function logout() {
        $title = 'Login'; 
        require __DIR__ . '/../Views/users/logout.php';
    }

    public function register() {
        $title = 'Register'; 
        require __DIR__ . '/../Views/users/register.php';
    }

    public function addUser() {
        $title = 'Nouvel Utilisateur'; 
        require __DIR__ . '/../Views/users/addUser.php';
    }

    public function admin() {
        $title = 'Panneau admin'; 
        require __DIR__ . '/../Views/users/admin.php';
    }

}