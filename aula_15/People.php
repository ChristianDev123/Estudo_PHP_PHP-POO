<?php

abstract class People {
    protected $name;
    protected $age;
    protected $gender;
    protected $experience;

    public function __construct($name, $age, $gender){
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
        $this->setExperience(0);
    }

    protected function ownExperience($value){
        $this->setExperience($this->getExperience() + $value);
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

    public function getExperience(){
        return $this->experience;
    }

    public function setExperience($experience){
        $this->experience = $experience;
    }
}