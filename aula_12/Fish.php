<?php

require_once("Animal.php");

class Fish extends Animal {
    private $colorScale;

    public function move(){
        print("<p>Nadando</p>");
    }
    
    public function feed(){
        print("<p>Comendo Substâncias</p>");
    }
    
    public function makeSound(){
        print("<p>Peixe não faz som</p>");
    }

    public function makeBubble(){
        print("<p>Soltou um bolha</p>");
    }

    public function getColorScale(){
        return $this->colorScale;
    }

    public function setColorScale($value){
        $this->colorScale = $value;
    }
}