<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="container-centraliza" id="perfil">
    <h1>perfil</h1>
    <div class="container-perfil">
        <div class="itens-perfil">
            <p>nome da pessoa </p>
            <p>pao@email.com</p>
        </div>
        <div class="itens-perfil">
            <a href="/projeto/views/categoria/gerenciar_categorias.php">administrar livros</a>
            <a href="/projeto/views/categoria/gerenciar_livros.php">administrar categoria</a>
        </div>
    </div>
</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>
</body>

</html>