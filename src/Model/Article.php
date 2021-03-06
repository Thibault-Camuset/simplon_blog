<?php

namespace App\Model;

class Article {

    // Attributs
    private $_id;
    private $_title;
    private $_user;
    private $_content;
    private $_category;






    // Getters

    public function getId() {
        return $this->_id;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getUser() {
        return $this->_user;
    }

    public function getContent() {
        return $this->_content;
    }

    public function getCategory() {
        return $this->_category;
    }




    // Setters

    public function setId($id) {
        $this->_id = $id;
        return $this;
    }

    public function setTitle($title) {
        $this->_title = $title;
        return $this;
    }

    public function setUser($user) {
        $this->_user = $user;
        return $this;
    }

    public function setContent($content) {
        $this->_content = $content;
        return $this;
    }

    public function setCategory($category) {
        $this->_category = $category;
        return $this;
    }


}
?>