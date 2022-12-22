<?php

require_once("Wolf.php");

class Dog extends Mamifer {
    public function makeSound(){
        print("<p>Au! Au! Au!</p>");
    }

    public function reactFrase($frase){
        if($frase == "toma comida" || $frase == "Olá") print("<p>Abanar e latir</p>");
        else print("<p>Rosnar</p>");
    }

    public function reactHour($hour, $min){
        if($hour < 12) print("<p>Abanar</p>");
        else if($hour >=18) print("<p>Ignorar</p>");
        else print("<p>Abanar e Latir</p>");
    }

    public function reactOwner($isOwner){
        if($isOwner) print("<p>Abanar</p>");
        else print("<p>Rosnar e Latir</p>");
    }

    public function reactAgeWeight($age, $weight){
        if($age < 5){
            if($weight < 10) print("<p>Abanar</p>");
            else print("<p>Latir</p>");
        }
        else{
            if($weight < 10) print("<p>Rosnar</p>");
            else print("<p>Ignorar</p>");
        }
    }
}