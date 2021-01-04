<?php

namespace App\Model;

class User {

    // Attributs
    private $_name;
    private $_email;
    private $_password;
    private $_firstName;
    private $_lastName;
    private $_date;
    private $_role;






    // Getters

    public function getName() {
        return $this->_name;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function getPassword() {
        return $this->_password;
    }

    public function getFirstName() {
        return $this->_firstName;
    }

    public function getLastName() {
        return $this->_lastName;
    }

    public function getDate() {
        return $this->_date;
    }

    public function getRole() {
        return $this->_role;
    }




    // Setters

    public function setname($name) {
        $this->_name = $name;
        return $this;
    }

    public function setEmail($email) {
        $this->_email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->_password = $password;
        return $this;
    }

    public function setfirstName($firstName) {
        $this->_firstName = $firstName;
        return $this;
    }

    public function setLastName($lastName) {
        $this->_lastName = $lastName;
        return $this;
    }

    public function setDate($date) {
        $this->_date = $date;
        return $this;
    }

    public function setRole($role) {
        $this->_role = $role;
        return $this;
    }


}
?>