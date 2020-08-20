<?php


namespace PedroHenrique\BlogSimples;

use PDO;

class Conexao
{
    private $user;
    private $pass;
    public $conn;

    public function __construct(){
        $this->user = 'root';
        $this->pass = '';
        $this->conn = $this->Conectar();
    }

    public function Conectar()
    {
        $conexao = new PDO("mysql:host=localhost;dbname=blog", $this->user, $this->pass);
        return $conexao;
    }


}