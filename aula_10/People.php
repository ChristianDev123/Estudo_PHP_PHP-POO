<?php

class People {
    private $name;
    private $age;
    private $gender;

    public function makeBirthday(){
        $this->setAge($this->getAge() + 1);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }    
}