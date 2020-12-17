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

    


}