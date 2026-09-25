<?php
require_once __DIR__ . "/../configs/conexao.php";

class Categoria
{
    private $id_categoria;
    private $nome;

    public static function listar()
    {
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

    public function inserir($nome)
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO categoria (nome) VALUES (:nome)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $nome);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deletar($id)
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "DELETE FROM categoria WHERE id_categoria = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function carregar($id)
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM categoria WHERE id_categoria = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $resultado = $stmt->fetch();

            if ($resultado['nome']) {
                $this->id_categoria = $resultado['id_categoria'];
                $this->nome = $resultado['nome'];
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function atualizar($nome, $id)
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "UPDATE categoria SET nome = :nome WHERE id_categoria = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getId()
    {
        return $this->id_categoria;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
