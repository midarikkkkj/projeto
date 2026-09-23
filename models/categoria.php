<?php 
require_once __DIR__ . "/../configs/conexao.php"

class Categoria {
    private $id_categoria;
    private $nome;

    public static function listar() {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM categoria";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function inserir($nome){
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO categora (nome) VALUES (:nome)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $nome);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

