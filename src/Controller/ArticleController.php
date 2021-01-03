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
        $nbArticle = $this->articleRepository->count();
        $nbElement = 5;
        $nbPages = ceil($nbArticle / $nbElement);


        if (isset($_GET['page'])) {
            $offset = ($_GET['page'] -1) * $nbElement;
        } else {
            $offset = 0;
        }



        $articles = $this->articleRepository->selectAll($nbElement, $offset);
        $title = 'Liste'; 
        require __DIR__ . '/../Views/articles/list.php';
    }

    public function selectBy($id) {
        $article = $this->articleRepository->selectBy($id);
        $title = 'Article'; 
        require __DIR__ . '/../Views/articles/read.php';
    }

    public function orderBy($category) {
        $category_articles = $this->articleRepository->orderBy($category);
        $title = "$category";
        require __DIR__ . "/../Views/articles/$category.php";

    }

    


}