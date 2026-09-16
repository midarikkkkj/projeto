<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";

$id = $ GET['id'];
$livro - Livro::buscarPorId($id);

?>
<main class="main-detalhe" >
    <div id="img-detalhe">
        <?php if($livro['capa']==null):?>
            <img src="https://picsum.photos/300/400" alt="">
        <?php else: ?>
            <img src="/projeto/img/gatinho.jpg/<? =$livro['capa']?>" alt="">
        <?php endif; ?>

    </div>
    <div id="texto-detalhe">
        <h2><?= $livro['titulo'] ?></h2>
        <br>
        <p><?= $livro['resumo'] ?></p>
        <br>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea aspernatur cumque odio culpa aperiam, omnis rerum cum at eaque fugit. Tenetur eligendi, praesentium a nemo voluptatibus quibusdam aspernatur quisquam hic!</p>
        <p><?= $livro['ano_pub'] ?></p>
        <br>
        <p><?= $livro['autor'] ?></p>
        <p>Categoria</p>

    </div>

</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>
</body>

</html>