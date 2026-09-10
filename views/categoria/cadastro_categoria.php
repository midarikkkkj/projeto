<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="main-detalhe">
    <form action="" method="post" enctype="multipart/form-data">
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