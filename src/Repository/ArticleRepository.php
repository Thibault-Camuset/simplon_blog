<?php

namespace App\Repository;

use App\Services\DataBase\DBManagerInterface;
use App\Model\Article;




class ArticleRepository {
    private $table = 'articles';
    private $dbManager;


    public function __construct($dbManager) {
        $this->dbManager = $dbManager;
    } 




    private function toObject($item) {
        $article = new Article();
            
            $article->setId($item['articleId'])
                    ->setTitle($item['articleTitle'])
                    ->setUser($item['userName'])
                    ->setContent($item['articleContent']);
            return $article;
    }






    public function selectAll() {
        $results = $this->dbManager->selectAll($this->table);

        $articles = [];
        foreach ($results as $item) {
            $articles[] = $this->toObject($item);
        }

        return $articles;
    
    }

    public function selectBy($id) {
        $result = $this->dbManager->selectBy($this->table, $id);
        $article = $this->toObject($result);
        return $article;
    }

}