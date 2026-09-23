<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="main-detalhe">
    <form action="/projeto/controllers/categoria_add_controller.php" method="post" enctype="multpart/form-data">
        <div class="form-item">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <button type="submit">cadastrar</button>
    </form>

</main>
</body>

<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>