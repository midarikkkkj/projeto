<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
require_once __DIR__ . "/../../models/categoria.php";

$resultado = Categoria::listar();

?>
<main class="container-centraliza">
    <a href="/projeto/views/categoria/cadastro_categoria.php" class="link-btn">adicionar categoria</a>


    <table class="table table-dark table-striped">
        <tr>
            <th>nome da categoria</th>
            <th colspan="2">opçoes</th>
        </tr>

        <?php foreach ($resultado as $categoria): ?>
            <tr>
                <td><?= $categoria['nome'] ?></td>
                <td><a href="/projeto/views/categoria/editar_categoria.php?id=<?=  $categoria['id_categoria'] ?>">editar</a></td>
                <td><a href="/projeto/controllers/categoria_del_controller.php?id=<?= $categoria['id_categoria'] ?>">deletar</td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>