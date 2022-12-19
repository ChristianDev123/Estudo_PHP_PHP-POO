<?php
require_once("Controller.php");

class RemoteControll implements Controller {
    private $volume;
    private $on;
    private $playing;

    public function __construct(){
        $this->volume = 50;
        $this->on = false;
        $this->playing = false;
    }

    public function getVolume(){
        return $this->volume;
    }

    public function setVolume($volume){
        $this->volume = $volume;
    }

    public function getOn(){
        return $this->on;
    }

    public function setOn($value){
        $this->on = $value;
    }

    public function getPlaying(){
        return $this->playing;
    }

    public function setPlaying($value){
        $this->playing = $value;
    }

    public function turnOn(){
        $this->setOn(true);
    }

    public function turnOff(){
        $this->setOn(false);
    }

    public function openMenu(){
        $on = $this->getOn()?'sim':'não';
        $playing = $this->getPlaying()?"sim":"não";
        echo "<br> Está ligado? $on";
        echo "<br> Está tocando? $playing";
        echo "<br> Volume: {$this->getVolume()} ";
        for($i=0;$i <= $this->getVolume();$i+=10){
            print("| ");
        }
    }

    public function closeMenu(){
        echo "<br> Fechando menu";
    }

    public function plusVolume(){
        if($this->getOn() && $this->getVolume() < 100) $this->setVolume($this->getVolume() + 10);
    }

    public function lowerVolume(){
        if($this->getOn() && $this->getVolume() > 0) $this->setVolume($this->getVolume() - 10);
    }

    public function turnMute(){
        if($this->getOn() && $this->getVolume() > 0) $this->setVolume(0);
    }

    public function turnUnMute(){
        if($this->getOn() && $this->getVolume() == 0) $this->setVolume(50);
    }

    public function play(){
        $this->setPlaying(true);
    }

    public function pause(){
        $this->setPlaying(false);
    }
}