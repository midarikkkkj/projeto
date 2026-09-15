<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="main-detalhe">
    <form action="" method="post" enctype="multipart/form-data">
        <img src="https://picsum.photos/100" alt="" class="logo">
        <div class="form-item">
            <label for="nome">nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="form-item">
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-item">
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha">

        </div>
        <div class="form-item">
            <label for="foto">foto de perfil</label>
            <input type="file" name="foto" id="foto">

        </div>
        <button type="submit">cadastrar</button>

    </form>

</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>