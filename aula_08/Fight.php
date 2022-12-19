<?php

require_once("Fighter.php");

class Fight {
    private Fighter $challenged;
    private Fighter $challenger;
    private $rounds;
    private $approved;

    public function __construct(){
        
    }

    public function scheduleFight($fighter1, $fighter2){
        if($fighter1->getCategory() == $fighter2->getCategory() && $fighter1 != $fighter2){
            $this->challenged = $fighter1;
            $this->challenger = $fighter2;
            $this->approved = true;
        }
        else{
          $this->approved = false;
          $this->challenged = null;
          $this->challenger = null;  
        }
    }

    public function fight(){
        if($this->getApproved()){
            $this->challenger->show();
            echo "<br>";
            echo "<br>";
            echo "===============================";
            echo "<br>";
            $this->challenged->show();
            $winner = random_int(0,2);
            switch($winner){
                case 0:
                    print("<br>Empatou!");
                    $this->challenger->drawfight();
                    $this->challenged->drawfight();
                    break;
                case 1:
                    print("<br><p>{$this->challenged->getName()} ganhou a luta!</p>");
                    $this->challenged->winFight();
                    $this->challenger->looseFight();
                    break;
                case 2:
                    print("<br><p>{$this->challenger->getName()} ganhou a luta!</p>");
                    $this->challenger->winFight();
                    $this->challenged->looseFight();
                    break;
            }
        }
        else{
            print("Esta luta não foi aprovada");
        }
    }

    public function getChalenged(){
        return $this->challenged;
    }

    public function setChallenged($challenged){
        $this->challenged = $challenged;
    }

    public function getChallenger(){
        return $this->challenger;
    }

    public function setChallenger($challenger){
        $this->challenger = $challenger;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    public function getApproved(){
        return $this->approved;
    }

    public function setApproved($approved){
        $this->approved = $approved;
    }
}