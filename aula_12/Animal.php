<?php

abstract class Animal {
    protected $weight;
    protected $age;
    
    public abstract function move();
    public abstract function feed();
    public abstract function makeSound();
    
    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($value){
        $this->weight = $value;
    }

    public function getAge(){
        return $this->age;
    }
    
    public function setAge($age){
        $this->age = $age;   
    }
}