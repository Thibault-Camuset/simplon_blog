<?php

namespace App\Repository;

use App\Services\DataBase\DBManagerInterface;
use App\Model\Category;




class CategoryRepository {
    private $table = 'categories';
    private $dbManager;


    public function __construct($dbManager) {
        $this->dbManager = $dbManager;
    } 


    private function toObject($item) {
        $category = new Category();
            
            $category->setName($item['categoryName']);
            return $category;
    }




    public function selectAll($nbElement, $offset) {
        $results = $this->dbManager->selectAll($this->table, $nbElement, $offset);

        $articles = [];
        foreach ($results as $item) {
            $categories[] = $this->toObject($item);
        }

        return $categories;
    
    }


}