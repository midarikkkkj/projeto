<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="main-login">
    <form action="" method="post" enctype="multipart/form-data" id="form2">
        <img src="https://picsum.photos/100" alt="" class="logo">

        <div class="form-item">
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </div>

        <div class="form-item">
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha">

        </div>

        <button type="submit">Entrar</button>

    </form>

</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>
</body>

</html>