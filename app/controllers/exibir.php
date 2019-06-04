<?php
class exibir{
    public static function anexo($id){
        if($id == ""){
            header("location: ../../");
        }
        require_once (models."");
        require_once(views."anexo/header.php");
        require_once(views."anexo/body.php");
    }
}