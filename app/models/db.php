<?php

/*

 * Versão 1.0.0 &copy, Divisão de Tecnologia da Informação e Eletrônica - Prefeitura Municipal de Figueirão
 * Todos os direitos reservados
 * Code By @MarcosOliveira
 */

class conecta{
    public static function local(){
        $host   = "127.0.0.1";
        $user   = "root";
        $pass   = "";
        $db     = "law-pro";
        $link = mysqli_connect($host,$user,$pass,$db);
        if(!$link){
            die("Falha na conexao: " . mysqli_connect_error());
        }
        $conn=mysqli_connect($host,$user,$pass,$db);
        mysqli_set_charset($conn,"utf8");
        return $conn;

    }
}