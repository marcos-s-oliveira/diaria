<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 04/06/2019
 * Time: 08:38
 */
class diaria{
    public static function nova(){
        require_once (views."theme/header.phtml");
        require_once (views."forms/diaria.phtml");
    }
}