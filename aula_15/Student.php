<?php

require_once("People.php");

class Student extends People{
    private $login, $totalWatched;

    public function __construct($name, $age, $gender, $login){
        parent::__construct($name, $age, $gender);
        $this->setLogin($login);
        $this->setTotalWatched(0);
    }

    public function watchedIncrease(){
        $this->setTotalWatched($this->getTotalWatched() + 1);
    }

    public function getLogin(){
        return $this->login;
    }
    
    public function setLogin($login){
        $this->login = $login;
    }

    public function getTotalWatched(){
        return $this->totalWatched;
    }
    
    public function setTotalWatched($totalWatched){
        $this->totalWatched = $totalWatched;
    }
}