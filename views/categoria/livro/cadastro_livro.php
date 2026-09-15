<?php
require_once __DIR__ . "/../../templates/---------_cabecalho.php";
?>
<main class="main-detalhe">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-item">
            <label for="titulo">titulo</label>
            <input type="text" name="titulo" id="titulo">
        </div>

        <div class="form-item">
            <label for="ano">ano de publicação</label>
            <input type="text" name="ano" id="ano">
        </div>

        <div class="form-item">
            <label for="titulo">nome do autor</label>
            <input type="text" name="autor" id="autor">
        </div>

        <div class="form-item">
            <label for="resumo">resumo</label>
            <textarea type="text" name="resumo" id="resumo">
                </textarea>
        </div>

        <div class="form-item">
            <label for="categoria">categoria</label>
            <select type="text" name="categoria" id="categoria">
                <option value="categoria1">categoria 1</option>
                <option value="categoria2">categoria 2</option>
            </select>
        </div>


        <button type="submit">cadastrar</button>

    </form>

</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>