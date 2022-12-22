<?php

require_once("VideoActions.php");

class Video implements VideoActions {
    private $title;
    private $review;
    private $views;
    private $likes;
    private $isPlaying;
    
    public function __construct($title){
        $this->setTitle($title);
        $this->setReview(1);
        $this->setViews(0);
        $this->setLikes(0);
        $this->setIsPlaying(false);
    }

    public function play(){
        $this->setIsPlaying(true);
    }

    public function pause(){
        $this->setIsPlaying(false);
    }

    public function like(){
        $this->setLikes($this->getLikes() + 1);
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getReview(){
        return $this->review;
    }

    public function setReview($review){
        $average = ($this->getReview() + $review) / $this->getViews();
        $this->review = $average;
    }

    public function getViews(){
        return $this->views;
    }

    public function setViews($views){
        $this->views = $views;
    }

    public function getLikes(){
        return $this->likes;
    }

    public function setLikes($likes){
        $this->likes = $likes;
    }

    public function getIsPlaying(){
        return $this->isPlaying;
    }

    public function setIsPlaying($isPlaying){
        $this->isPlaying = $isPlaying;
    }
}