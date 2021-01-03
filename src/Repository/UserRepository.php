<?php

namespace App\Repository;

use App\Services\DataBase\DBManagerInterface;
use App\Model\User;




class UserRepository {
    private $table = 'users';
    private $dbManager;


    public function __construct($dbManager) {
        $this->dbManager = $dbManager;
    } 




    public function checkUser($userName, $password) {

        $result = $this->dbManager->checkUser($this->table, $userName, $password);
        return $result;
        
    }

    public function addUser($userName, $email, $password, $firstName, $lastName, $userType) {
        $this->dbManager->addUser($this->table, $userName, $email, $password, $firstName, $lastName, $userType);
    }



}