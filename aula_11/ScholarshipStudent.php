<?php

require_once("Student.php");

final class ScholarshipStudent extends Student {
    private $scholarship;
    
    public function renewScholarship(){
        print("<p>Bolsa renovada</p>");
    }

    public function payTuition(){
        print("<p>{$this->getName()} é bolsista, ou seja, paga com desconto!</p>");
    }

    public function getScholarship(){
        return $this->scholarship;
    }

    public function setScholarship($value){
        $this->scholarship = $value;
    }
}