<?php
    class Pen {
        private $model;
        private $penTip;
        private $capped;
        private $color;

        public function __construct($m,$c,$p)
        {
            $this->model = $m;
            $this->color = $c;
            $this->penTip = $p;
            $this->turnCapped();
        }

        public function turnCapped(){
            $this->capped = true;
        }

        public function getModel(){
            return $this->model;
        }

        public function setModel($model){
            $this->model = $model;
        }

        public function getPenTip(){
            return $this->penTip;
        }

        public function setPenTip($penTip){
            $this->penTip = $penTip;
        }
        
    }
?>