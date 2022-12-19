<?php

require_once("People.php");

final class Teacher extends People {
    private $especiality;
    private $salary;

    public function receiveIncrease($value){
        $this->setSalary($this->getSalary() + $value);
    }

    public function getEspeciality(){
        return $this->especiality;        
    }

    public function setEspeciality($especiality){
        $this->especiality = $especiality;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }

}