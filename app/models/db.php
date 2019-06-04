<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 03/06/2019
 * Time: 17:20
 */
class banco{
    private $host = "127.0.0.1";
    private $user = "sysdba";
    private $pass = "@c3ssO1523-1";
    private $db = "acricam";
    public static function conexao()
    {

        $link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$link) {
            die("Falha na conexao: " . mysqli_connect_error());
        }
        $conn = mysqli_connect($host, $user, $pass, $db);
        mysqli_set_charset($conn, "utf8");
        return $conn;

    }
}