<?php

require_once("People.php");

class Student extends People {
    private $registry;
    private $course;
    
    public function cancelRegistry(){
        $this->setRegistry(null);
        echo "<p>Matrícula cancelada</p>";
    }

    public function getRegistry(){
        return $this->registry;
    }

    public function setRegistry($registry){
        $this->registry = $registry;
    }

    public function getCourse(){
        return $this->course;
    }

    public function setCourse($course){
        $this->course = $course;
    }
}