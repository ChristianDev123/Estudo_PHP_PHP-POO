<?php

abstract class People {
    protected $name;
    protected $age;
    protected $gender;

    public final function makeBirthday(){
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