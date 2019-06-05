<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 03/06/2019
 * Time: 17:11
 */

class Servidor{
    public $id;
    public $categoria;
    public $nome;
    public $cpf;
    public $cargo;
    public $banco;
    public $agencia;
    public $conta;

    /**
     * Servidor constructor.
     * @param $id
     * @param $categoria
     * @param $nome
     * @param $cpf
     * @param $cargo
     * @param $banco
     * @param $agencia
     * @param $conta
     */
    public function __construct($cpf){
        $query = "SELECT * FROM servidores WHERE cpf = '".$cpf."' LIMIT 1";
        require_once(models."sql.php");
        $sql = new sql;
        $result = $sql->select($query);
        $row = mysqli_fetch_assoc($result);


        $this->id = $row['id'];
        //$this->categoria = $categoria;
        if($row['nome'] != ""){
            $this->nome = $row['nome'];
        }else{
            $this->nome = "CPF INVÁLIDO";
        }

        $this->cpf = $cpf;
        $this->cargo = $row['cargo'];
        //$this->banco = $banco;
        //$this->agencia = $agencia;
        //$this->conta = $conta;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * @param mixed $banco
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    /**
     * @return mixed
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * @param mixed $agencia
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    /**
     * @return mixed
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * @param mixed $conta
     */
    public function setConta($conta)
    {
        $this->conta = $conta;
    }



}