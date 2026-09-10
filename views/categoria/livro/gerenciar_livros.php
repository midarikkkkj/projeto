<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>
<main class="container-centraliza" id="glivros">
    <a href="gerenciar_livros.php"></a>
    <h1>gerenciar livros</h1>
    <div class="container-glivros">
        <div class="itens-glivros">
            <h2>titulo</h2>
            <p>lalala</p>
            <h2>ano</h2>
            <p>2026</p>
            <h2>categoria</h2>
            <p>categoria 1</p>
            <h2>opções</h2>
        </div>
        <div class="itens-glivros">
            <a href="">editar</a>
            <buton onclick="deletarelemento()">deletar</buton>
        </div>
    </div>
</main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>
</body>

</html>