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

    public function delete($id) {
        $this->articleRepository->delete($id);
        $title = 'Delete';
        header("refresh:0; url=/user/adminarticles"); 
    }

    public function redac() {
        if (isset($_POST['articleTitle'])) {

            $article = new Article();
            
            $article->setTitle($_POST['articleTitle'])
                    ->setUser($_POST['userName'])
                    ->setContent($_POST['articleContent'])
                    ->setCategory($_POST['articleCategory']);

            $this->articleRepository->addArticle($article);

            echo 'Article bien ajouté!';
            header("refresh:3; url=/"); 



        } else {
        require __DIR__ . '/../Views/articles/redac.php';
        }
    }

    public function edit($id) {
        
        $article = $this->articleRepository->selectBy($id);


        if (isset($_POST['articleTitle'])) {
        
        
            
            $article->setTitle($_POST['articleTitle'])
                    ->setUser($_POST['userName'])
                    ->setContent($_POST['articleContent'])
                    ->setCategory($_POST['articleCategory']);

                    $this->articleRepository->edit($id, $article);

                    echo 'Article bien modifié!';
                    header("refresh:3; url=/user/adminarticles");
                    exit; 

        }

        $title = 'Modifier';
        require __DIR__ . '/../Views/users/admin/edit.php';

    }

    


}