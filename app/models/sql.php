<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 04/06/2019
 * Time: 13:02
 */
class sql{
    public function insert($query){
        require_once (models."db.php");
        $db = new conecta;
        $link = $db->local();

        $insert = mysqli_query($link, $query) OR die(mysqli_errno($link));
        return $insert;
    }
    public function select($query){
        require_once (models."db.php");
        $db = new conecta;
        $link = $db->local();

        $select  = mysqli_query($link, $query);
        return $select;
    }
}