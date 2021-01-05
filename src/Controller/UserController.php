<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use App\Repository\CategoryRepository;
use App\Services\DataBase\PDOManager;
use App\Model\Article;
use App\Model\User;
use App\Model\Category;



class UserController {

    private $userRepository;
    private $articleRepository;
    private $categoryReository;

    public function __construct() {
        $dbManager = new PDOManager();
        $this->userRepository = new UserRepository($dbManager);
        $this->articleRepository = new ArticleRepository($dbManager);
        $this->categoryRepository = new CategoryRepository($dbManager);
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

    public function delete($id) {
        $this->userRepository->delete($id);
        $title = 'Delete';
        header("refresh:0; url=/user/adminusers"); 
    }

    public function admin($modif) {
        if ($modif == '') {
        $title = 'Panneau admin'; 
        require __DIR__ . '/../Views/users/admin/admin.php';
        }
        if ($modif   == 'adminarticles') {
            $title = 'Modifier les Articles';
            $articles = $this->articleRepository->selectAll(10,0);
            require __DIR__ . '/../Views/users/admin/articles.php';
        }
        if ($modif   == 'adminusers') {
            $title = 'Modifier les Utilisateurs';
            $users = $this->userRepository->selectAll(10,0);
            require __DIR__ . '/../Views/users/admin/users.php';
        }
        if ($modif   == 'adminpictures') {
            $title = 'Modifier les Photos';
            require __DIR__ . '/../Views/users/admin/pictures.php';
        }
        if ($modif   == 'admincategories') {
            $title = 'Modifier les Catégories';
            $categories = $this->categoryRepository->selectAll(10,0);
            require __DIR__ . '/../Views/users/admin/categories.php';
        }
    }

}