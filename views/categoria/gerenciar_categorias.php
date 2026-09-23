<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="container-centraliza">
    <a href="/projeto/views/categoria/cadastro_categoria.php" class="link-btn">adicionar categoria</a>


    <table>
        <tr>
            <th>nome da categoria</th>
            <th colspan="2">opçoes</th>
        </tr>

        <?php foreach ($resultado as $categoria): ?>
            <tr>
                <td><?= $categoria['nome'] ?></td>
                <td><a href="">editar</a></td>
                <td><a href="">deletar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>
</body>

</html>