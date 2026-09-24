<?php
require_once __DIR__ . "/../configs/conexao.php";


class Livro
{
    private $id_livro;
    private $titulo;
    private $ano_pub;
    private $autor;
    private $resumo;
    private $capa;
    private $categoria;


    public static function listar()
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM livro";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchALL();
        } catch (PDOException $e) {
            echo 'Erro ao buscar livros: ' . $e->getMessage();
        }
    }

    public static function buscarPorId($id){
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT livro.*, categoria.nome FROM livro JOIN categoria ON livro.id_categoria = categoria.id_categoria WHERE livro.id_livro = :id ";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Erro ao buscar livros: ' . $e->getMessage();
        }
    }

    public function inserir($nome){
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO livro (nome) VALUES (:nome)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $nome);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function carregar($id){
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM livro JOIN categoria ON livro.id_categoria = categoria.id_categoria WHERE livro.id_livro = :id ";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $resultado = $stmt->fetch();

            if ($resultado['nome']);
            $this->id_livro = $resultado['id_livro'];
            $this->id_livro = $resultado['nome'];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function atualizar($nome, $id) {
        try {
            $conexao = Conexao::conectar();
            $sql = "UPDATE livro SET nome = :nome WHERE livro.id_livro = :id ";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome' , $nome);
            $stmt->bindValue(':id' , $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
