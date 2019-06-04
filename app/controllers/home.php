<?php
class home{
    public static function index(){
        require_once (views."theme/header.phtml");
        require_once (views."home/home.phtml");
    }
}