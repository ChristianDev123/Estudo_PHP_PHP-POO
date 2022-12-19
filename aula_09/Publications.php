<?php

interface Publications {
    public function open();
    public function close();
    public function leafThrough($page);
    public function nextPage();
    public function backPage();
}