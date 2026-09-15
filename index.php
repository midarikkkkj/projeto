<?php
require_once __DIR__ . "/templates/_cabecalho.php";

$conn = new PDO("mysql:host=localhost;dbname=biblioteca;charset=utf8mb4" , "root" , "");
$query = "SELECT * FROM livro";
$resultado = $conn->query($query)->fetchALL();


?>


<main>
    <img src="https://picsum.photos/900/200" alt="" id="jumbo">

    <button id="teste">CLIQUE AQUI</button>
    <h1>BIBLIOTECA</h1>

    <?php if(count($resultado) == 0): ?>
        <p> nenhum livro encontrado </p> 

    <div class="card-container">
        <? foreach($resultado as $livro): ?>
        <a href="/projeto/views/livro/detalhes.php?id=<?= /4livro ['id_livro'] ?>>
            <div class="card">

                <div class="card-img">
                    <?php if($livro['capa']==null):?>
                        <img src="https://picsum.photos/200" alt="">
                    <?php else: ?>
                        <img src="/projeto/img/gatinho.jpg/<? =$livro
                    <?php endif; ?>
                </div>
                <div class="card-text">
                    <h2><?= $livro['titulo']?></h2>

                </div>
            </div>
        </a>
        <? endforeach; ?>
    </div>

</main>
<?php
require_once __DIR__ . "/templates/_rodape.php";
?>
</body>

</html>
.