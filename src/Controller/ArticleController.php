<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Services\DataBase\PDOManager;
use App\Model\Article;

class ArticleController {

    private $articleRepository;

    public function __construct() {
        $dbManager = new PDOManager();
        $this->articleRepository = new ArticleRepository($dbManager);
    }

    public function list() {
        $articles = $this->articleRepository->selectAll();
        $title = 'Liste'; 
        require __DIR__ . '/../Views/articles/list.php';
    }

    public function selectBy($id) {
        $article = $this->articleRepository->selectBy($id);
        $title = 'Article'; 
        require __DIR__ . '/../Views/articles/read.php';
    }

    


}