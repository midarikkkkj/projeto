<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="main-detalhe">
    <form action="/biblioteca/controllers/usuario_add_controller.php" enctype="multpart/form-data">
        <div class="form-item">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>

        <div class="form-item">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>

        <div class="form-item">
            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha">
        </div>

        <div class="form-item">
            <label for="foto">Foto de perfil</label>
            <input type="password" name="foto" id="foto">
        </div>

        <button type="submit">cadastrar</button>
    </form>

</main>
</body>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>