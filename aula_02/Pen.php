<?php
    class Pen{
        var $model;
        var $color;
        var $penTip;
        var $capped;
        var $limit;

        function write(){
            if($this->capped) echo "<p>[ERROR] can't write</p>";
            else echo "<p>I am writing</p>";
        }

        function turnCapped(){
            $this->capped = true;
        }

        function turnUnCapped(){
            $this->capped = false;
        }
    }
?>