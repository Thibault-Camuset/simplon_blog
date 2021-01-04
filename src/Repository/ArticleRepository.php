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
                    ->setContent($item['articleContent'])
                    ->setCategory($item['categoryName']);
            return $article;
    }




    public function count() {
        return $this->dbManager->count($this->table);
    
    }

    public function selectAll($nbElement, $offset) {
        $results = $this->dbManager->selectAll($this->table, $nbElement, $offset);

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

    public function orderBy($category) {
        $results = $this->dbManager->orderBy($this->table, $category);

        $category_articles = [];
        foreach ($results as $item) {
            $category_articles[] = $this->toObject($item);
        }
        return $category_articles;

    }

    public function delete($id) {
        $this->dbManager->delete($this->table, 'articleId', $id);
    }

    public function addArticle($article) {
        $this->dbManager->addArticle($article);
    }

    public function edit($id, $updatedArticle) {
        $this->dbManager->edit($id, $updatedArticle);
    }

}