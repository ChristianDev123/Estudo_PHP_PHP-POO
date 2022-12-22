<?php

require_once("Video.php");
require_once("Student.php");

class Visualization {
    private Student $spector;
    private Video $movie;

    public function __construct($spector, $movie){
        $this->setSpector($spector);
        $this->setMovie($movie);
        $this->movie->setViews($this->movie->getViews() + 1);
        $this->spector->watchedIncrease();
    }

    public function getSpector(){
        return $this->spector;
    }

    public function setSpector($spector){
        $this->spector = $spector;
    }

    public function getMovie(){
        return $this->movie;
    }

    public function setMovie($movie){
        $this->movie = $movie;
    }

    public function review(){
        echo "teste";
        $this->movie->setReview(5);
    }

    public function reviewNote($note){
        $this->movie->setReview($note);
    }

    public function reviewPercent($percent){
        $note = 0;
        if($percent < 20) $note = 3;
        else if($percent <= 50) $note = 5;
        else if($percent <= 90) $note = 8;
        else $note = 10;
        $this->movie->setReview($note);
    }
}