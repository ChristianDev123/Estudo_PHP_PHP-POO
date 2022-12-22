<?php

require_once("Animal.php");

class Mamifer extends Animal {
    protected $colorFur;

    public function makeSound(){
        print("<p>som de mamífero</p>");
    }
}