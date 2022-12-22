<?php

require_once("Animal.php");

class Bird extends Animal {
    private $colorFeather;

    public function move(){
        print("<p>Voando</p>");
    }
    
    public function feed(){
        print("<p>Comendo frutas</p>");
    }
    
    public function makeSound(){
        print("<p>Som de ave</p>");
    }

    public function makeNest(){
        print("<p>Constuiu um ninho</p>");
    }

    public function getColorFeather(){
        return $this->colorFeather;
    }

    public function setColorFeather($value){
        $this->colorFeather = $value;
    }
}