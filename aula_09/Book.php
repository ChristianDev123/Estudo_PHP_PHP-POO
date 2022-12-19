<?php


require_once("People.php");
require_once("Publications.php");

class Book implements Publications{
    private $title;
    private $author;
    private $totalPages;
    private $currentPage;
    private $isOpen;
    private People $reader;

    public function __construct($title, $author, $totalPages, $reader){
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setTotalPages($totalPages);
        $this->setReader($reader);
        $this->setCurrentPage(0);
        $this->setIsOpen(false);
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function getTotalPages(){
        return $this->totalPages;
    }
    
    public function setTotalPages($totalPage){
        $this->totalPages = $totalPage;
    }

    public function getCurrentPage(){
        return $this->currentPage;
    }

    public function setCurrentPage($currentPage){
        $this->currentPage = $currentPage;
    }

    public function getIsOpen(){
        return $this->isOpen;
    }

    public function setIsOpen($isOpen){
        $this->isOpen = $isOpen;
    }

    public function getReader(){
       return $this->reader; 
    }

    public function setReader($reader){
        $this->reader = $reader;
    }

    public function showDetails(){
        $isOpen = $this->getIsOpen()?"Está aberto":"Está fechado";
        print("
            <div>
                <h2>{$this->getTitle()}</h2>
                <p>leitor: {$this->getReader()->getName()}</p>
                <p>autor: {$this->getAuthor()}</p>
                <p>total de páginas: {$this->getTotalPages()}</p>
                <p>{$isOpen}</p>
            </div>
        ");
    }

    public function open(){
        $this->setIsOpen(true);
    }

    public function close(){
        $this->setIsOpen(false);
    }

    public function leafThrough($page){
        if($page > $this->getTotalPages()){
            $this->setCurrentPage(0);
        }
        else {
            $this->setCurrentPage($page);
        }
    }

    public function nextPage(){
        $this->setCurrentPage($this->getCurrentPage() + 1);
    }

    public function backPage(){
        $this->setCurrentPage($this->getCurrentPage() - 1);
    }

}