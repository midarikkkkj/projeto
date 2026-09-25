<?php
require_once __DIR__ . "/templates/_cabecalho.php";
require_once __DIR__ . "/models/livro.php";

$resultado = Livro::listar();


?>


<main>
    <img src="https://picsum.photos/900/200" alt="" id="jumbo">

    <button id="teste">CLIQUE AQUI</button>
    <h1>BIBLIOTECA</h1>

    <?php if (count($resultado) == 0): ?>
        <p> nenhum livro encontrado </p>
    <?php else: ?>
        <div class="card-container">
            <?php foreach ($resultado as $livro): ?>
                <a href="/projeto/views/livro/detalhes.php?id=<?= $livro['id_livro'] ?>">
                    <div class="card">

                        <div class="card-img">
                            <?php if ($livro['capa'] == null): ?>
                                <img src="/projeto/img/capa/gatinho.jpg" alt="">
                            <?php else: ?>
                                <img src="/projeto/img/capa/gatodog.jpg.jpg/<?= $livro['capa'] ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="card-text">
                            <h2><?= $livro['titulo'] ?></h2>

                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>


<?php
require_once __DIR__ . "/templates/_rodape.php";
?>