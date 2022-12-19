<?php

class BankAccount {
    public $numAccount;
    protected $type;
    private $owner;
    private $balance;
    private $status = false;

    public function __construct(){
        $this->setBalance(0);
        $this->setStatus(false);
    }

    public function openAccount($type){
        $this->setType($type == "cc"?"Conta Corrente":"Conta Poupança");
        $this->setBalance($type == "cc"?50:150);
        $this->setStatus(true);
    }

    public function closeAccount(){
        if($this->getBalance() == 0) $this->setStatus(false);
        else if($this->getBalance() > 0) echo "[ERRO] conta ainda contém saldo";
        else echo "[ERRO] conta contém débito em aberto";
    }

    public function  deposit($value){
        if($this->getStatus()) $this->setBalance($this->getBalance() + $value);
        else echo "[ERROR] conta não aberta";
    }

    public function withdraw($value){
        if($this->getStatus() && $this->getBalance() >= $value) $this->setBalance($this->getBalance() - $value);
        else echo "[ERROR] conta não aberta ou saldo insuficiente";
    }

    public function monthlyPayment(){
        $value = $this->type == "cc"? 12:20;
        if($this->getStatus()) $this->setBalance($this->getBalance() - $value);
        else echo "Não foi possível realizar o pagamento, verifique o saldo e o status da conta";
    }

    public function getNumAccount(){
        return $this->numAccount;
    }

    public function setNumAccount($value){
        $this->numAccount = $value;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getOwner(){
        return $this->owner;
    }

    public function setOwner($name){
        $this->owner = $name;
    }

    public function getBalance(){
        return $this->balance;
    }

    public function setBalance($value){
        $this->balance = $value;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }
}