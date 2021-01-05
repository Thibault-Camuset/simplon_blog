<?php
namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Services\DataBase\PDOManager;
use App\Model\Category;

class CategoryController {

    private $categoryRepository;

    public function __construct() {
        $dbManager = new PDOManager();
        $this->categoryRepository = new CategoryRepository($dbManager);
    }

}