<?php

require_once("Animal.php");

class Mamifer extends Animal {
    private $furColor;

    public function move(){
        print("<p>Correndo</p>");
    }
    
    public function feed(){
        print("<p>Mamando</p>");
    }
    
    public function makeSound(){
        print("<p>Som de Mamífero</p>");
    }

    public function getFurColor(){
        return $this->furColor;
    }

    public function setFurColor($value){
        $this->furColor = $value;
    }
}