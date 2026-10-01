<?php
require_once __DIR__ . "/../models/livro.php";
session_start();

$id = $_POST['id']; 

$titulo = $_POST['titulo'];
$ano = $_POST['ano'];
$autor = $_POST['autor'];
$resumo = $_POST['resumo'];
$cat = $_POST['categoria'];

$livro = new Livro();

if (!empty($FILES['capa']['name'])) {
    $foto = $FILES['capa'];
    $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $nomedafoto = uniqid() . '.' . $extensao;
    $caminho = __DIR__ . "/..img/capa/uploads" . $nomedafoto;
    move_uploaded_file($foto['tmp_name'], $caminho);

    $livro->atualizar($titulo, $autor, $resumo, $nomedafoto, $cat, $id)
} else {
    $livro->atualizarSemCapa($titulo, $ano, $autor, $resumo, $cat, $id)
}

$_SESSION['aviso'] = "Livro atualizado com sucesso";
header('Location: /projeto/views/livro/gerenciar_livros.php');
exit();