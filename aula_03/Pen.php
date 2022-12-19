<?php
    class Pen{
        public $model;
        public $color;
        private $penTip;
        protected $capped;
        protected $limit;

        public function write(){
            if($this->capped) echo "<p>[ERROR] can't write</p>";
            else echo "<p>I am writing</p>";
        }

        public function turnCapped(){
            $this->capped = true;
        }

        public function turnUnCapped(){
            $this->capped = false;
        }
    }
?>