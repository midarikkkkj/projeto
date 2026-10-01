<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
require_once __DIR__ . "/../../models/livro.php";
$livros = Livro::listar();
?>

<main class="container-centraliza">
    <a href="/projeto/views/livro/cadastro_livro.php" class="link-btn">Adicionar Livro</a>
    <table class="table table-purple table-striped">
        <tr>
            <th>Titulo</th>
            <th>Ano</th>
            <th>Categoria</th>
            <th colspan="2">Opções</th>
        </tr>
        <?php foreach($livros as $l):?>
        <tr>
            <td><?=  $l['titulo'] ?></td>
            <td><?=  $l['ano_pub'] ?></td>
            <td><?=  $l['nome'] ?></td>
            <td><a href="/projeto/views/livro/editar_livro.php">Editar</a></td>
            <td><a href="/projeto/controllers/livro_del_controller.php">Deletar</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>