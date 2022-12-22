<?php

require_once("Mamifer.php");

final class kangaroo extends Mamifer {
    public function useBag(){
        print("Usando a bolsa");
    }   

    public function move(){
        print("<p>Saltando</p>");
    }
}