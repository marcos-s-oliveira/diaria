<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 03/06/2019
 * Time: 17:20
 */
class banco{
    private $host;
    private $user;
    private $pass;
    private $db;

    /**
     * banco constructor.
     * @param string $host
     * @param string $user
     * @param string $pass
     * @param string $db
     */
    public function __construct($host, $user, $pass, $db)
    {
        $this->host = "127.0.0.1";
        $this->user = "root";
        $this->pass = "";
        $this->db = "acricam";
    }


    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param string $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }



    public static function conexao()
    {

        $link = mysqli_connect($this->getHost(), $this->getUser(), $this->getPass(), $this->getDb());
        if (!$link) {
            die("Falha na conexao: " . mysqli_connect_error());
        }

        mysqli_set_charset($conn, "utf8");
        return $link;

    }
}