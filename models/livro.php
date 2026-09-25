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

    public static function buscarPorId($id)
    {
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

    public function inserir($titulo, $autor, $ano_pub, $resumo, $capa, $categoria)
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO livro (titulo, autor, ano_pub, resumo, capa, id_categoria) VALUES (:titulo, :autor, :ano_pub, :resumo, :capa, :categoria)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':titulo', $titulo);
            $stmt->bindValue(':autor', $autor);
            $stmt->bindValue(':ano_pub', $ano_pub);
            $stmt->bindValue(':resumo', $resumo);
            $stmt->bindValue(':capa', $capa);
            $stmt->bindValue(':categoria', $categoria);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deletar($id)
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "DELETE FROM livro WHERE id_livro = :id";
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
            $sql = "SELECT * FROM livro WHERE id_livro = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $resultado = $stmt->fetch();

            if ($resultado['nome']) {
                $this->id_livro = $resultado['id_livro'];
                $this->titulo = $resultado['titulo'];
                $this->ano_pub = $resultado['ano_pub'];
                $this->capa = $resultado['capa'];
                $this->autor = $resultado['autor'];
                $this->categoria = $resultado['id_categoria'];
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function atualizar($titulo, $autor, $ano_pub, $resumo, $capa, $categoria, $id)
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "UPDATE livro SET titulo = :titulo, autor = :autor, ano_pub = :ano_pub, resumo = :resumo, capa = :capa, categoria = :id_categoria, id = :id WHERE id_livro = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':titulo', $titulo);
            $stmt->bindValue(':autor', $autor);
            $stmt->bindValue(':ano_pub', $ano_pub);
            $stmt->bindValue(':resumo', $resumo);
            $stmt->bindValue(':capa', $capa);
            $stmt->bindValue(':categoria', $categoria);
            $stmt->bindValue(':id', $id);
            $stmt->execute(); 
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
