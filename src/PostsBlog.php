<?php


namespace PedroHenrique\BlogSimples;
use PDO;

class PostsBlog
{
    private $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }
    public function showPosts() : array
    {

        $stmt = $this->conexao->conn->prepare("SELECT * FROM `artigos`");

        $stmt->execute();

        return $result = $stmt->fetchAll();
    }

    public function getPostById($id)
    {
        $stmt = $this->conexao->conn->prepare("SELECT * FROM `artigos` where `id` = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}