<?php

require_once("Mamifer.php");

final class Dog extends Mamifer {
    public function buryBone(){
        print("<p>Enterrando osso</p>");
    }
    
    public function fanTail(){
        print("<p>Abando rabo</p>");
    }

    public function makeSound(){
        print("<p>Auauauaau</p>");
    }
}