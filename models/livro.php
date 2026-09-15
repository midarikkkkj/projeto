<? php 

require_once __DIR__ . "/../configs/conexao.php";
require_once __DIR__ . "/models/livro.php";

$resultado = Livro::listar();

class Livro {
    private $id_livro;
    private $titulo;
    private $ano_pub;
    private $autor;
    private $resumo;
    private $capa;
    private $categoria;


    public static function listar(){
        try {
            $conexao = Conexao::conectar();
            $q = "SELECT * FROM livro WHERE id_livro = id";
            $statement = $conexao->prepare($sql);
            $smtt->bindValue(':id', $id);
            $smtt->execute();
            return $smtt->fetchALL();
        } catch (PDOException $e) {
            echo 'Erro ao buscar livros: ' . $e->getMenssage();
        }
    }
}
.