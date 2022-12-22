<?php

require_once("Animal.php");

class Reptil extends Animal {
    private $colorScale;

    public function move(){
        print("<p>Rastejando</p>");
    }
    
    public function feed(){
        print("<p>Comendo Vegetais</p>");
    }
    
    public function makeSound(){
        print("<p>Som de Réptil</p>");
    }

    public function getColorScale(){
        return $this->colorScale;
    }

    public function setColorScale($value){
        $this->colorScale = $value;
    }
}