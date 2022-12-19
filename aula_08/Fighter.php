<?php
require_once("Athlete.php");

class Fighter implements Athlete {
    private $name;
    private $nacionality;
    private $age;
    private $height;
    private $weight;
    private $category;
    private $wins;
    private $defeats;
    private $ties;

    public function __construct($name, $nacionality, $age, $height, $weight, $wins, $defeats, $ties){
        $this->setName($name);
        $this->setNacionality($nacionality);
        $this->setAge($age);
        $this->setHeight($height);
        $this->setWeight($weight);
        $this->setWins($wins);
        $this->setDefeats($defeats);
        $this->setTies($ties);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getNacionality(){
        return $this->nacionality;
    }

    public function setNacionality($nacionality){
        $this->nacionality = $nacionality;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getHeight(){
        return $this->height;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
        $category = "";
        if($weight < 52.2 || $weight > 120.2) $category = "Inválido";
        else if($weight <= 70.3) $category = "Leve";
        else if($weight <= 83.9) $category = "Médio";
        else if($weight <= 120.2) $category = "Pesado"; 
        $this->setCategory($category);
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function getWins(){
        return $this->wins;
    }
    
    public function setWins($wins){
        $this->wins = $wins;
    }

    public function getDefeats(){
        return $this->defeats;
    }

    public function setDefeats($defeats){
        $this->defeats = $defeats;
    }

    public function getTies(){
        return $this->ties;
    }

    public function setTies($ties){
        $this->ties = $ties;
    }

    public function show(){
        print("<br>Lutador: {$this->getName()}");
        print("<br>Origem: {$this->getNacionality()}");
        print("<br>{$this->getAge()} anos");
        print("<br>{$this->getHeight()} m de altura");
        print("<br> Pesando {$this->getWeight()} Kg");
        print("<br> Ganhou: {$this->getWins()}");
        print("<br> Perdeu: {$this->getDefeats()}");
        print("<br> Empatou: {$this->getTies()}");
    }

    public function status(){
        print("<br>Lutador: {$this->getName()}");
        print("<br> Ganhou: {$this->getWins()}");
        print("<br> Perdeu: {$this->getDefeats()}");
        print("<br> Empatou: {$this->getTies()}");
    }

    public function winFight(){
        $this->setWins($this->getWins() + 1);
    }

    public function looseFight(){
        $this->setDefeats($this->getDefeats() + 1);
    }

    public function drawfight(){
        $this->setTies($this->getTies() + 1);
    }

}