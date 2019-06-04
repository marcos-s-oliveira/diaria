<?php
class exibir{
    public static function anexo($id){
        if($id == ""){
            header("location: ../../");
        }
        //require_once (models."");
        require_once(views."anexo/header.phtml");
        require_once(views."anexo/body.phtml");
    }
}