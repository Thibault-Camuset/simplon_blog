<?php

namespace App\Model;

class Category {

    // Attributs
    private $_name;
    
    // Getters

    public function getName() {
        return $this->_name;
    }

    

    // Setters

    public function setname($name) {
        $this->_name = $name;
        return $this;
    }

}
?>