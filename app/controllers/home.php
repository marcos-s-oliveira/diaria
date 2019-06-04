<?php
class home{
    public static function index(){
        require_once (views."theme/header.phtml");
        require_once (views."home/home.phtml");
    }

    public static function admin(){
        require_once (views."theme/header.phtml");
        require_once (views."home/home.phtml");
        require_once (views."tables/diarias.phtml");
    }
}