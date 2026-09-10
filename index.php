<?php
require_once __DIR__ . "/templates/_cabecalho.php";
?>
<main>
    <img src="https://picsum.photos/900/200" alt="" id="jumbo">

    <button id="teste">CLIQUE AQUI</button>
    <h1>BIBLIOTECA</h1>

    <div class="card-container">
        <a href="/projeto/views/livro/detalhes.html">
            <div class="card">

                <div class="card-img">
                    <img src="https://picsum.photos/200" alt="">
                </div>
                <div class="card-text">
                    <h2>titulo</h2>

                </div>
            </div>
        </a>
    </div>

</main>
<?php
require_once __DIR__ . "/templates/_rodape.php";
?>
</body>

</html>