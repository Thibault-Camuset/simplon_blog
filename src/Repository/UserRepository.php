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



    private function toObject($item) {
        $user = new User();
            
            $user->setName($item['userName'])
                    ->setEmail($item['userEmail'])
                    ->setPassword($item['userPassword'])
                    ->setFirstName($item['userFirstName'])
                    ->setLastName($item['userLastName'])
                    ->setDate($item['createdAt'])
                    ->setRole($item['roleId']);
            return $user;
    }






    public function checkUser($userName, $password) {

        $result = $this->dbManager->checkUser($this->table, $userName, $password);
        return $result;
        
    }

    public function addUser($userName, $email, $password, $firstName, $lastName, $userType) {
        $this->dbManager->addUser($this->table, $userName, $email, $password, $firstName, $lastName, $userType);
    }


    public function selectAll($nbElement, $offset) {
        $results = $this->dbManager->selectAll($this->table, $nbElement, $offset);

        $users = [];
        foreach ($results as $item) {
            $users[] = $this->toObject($item);
        }

        return $users;
    }



}