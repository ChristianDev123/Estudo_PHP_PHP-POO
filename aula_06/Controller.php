<?php

interface Controller{
    public function turnOn();
    public function turnOff();
    public function openMenu();
    public function closeMenu();
    public function plusVolume();
    public function lowerVolume();
    public function turnMute();
    public function turnUnMute();
    public function play();
    public function pause();
}