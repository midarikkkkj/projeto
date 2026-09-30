<?php
require_once __DIR__ ."/../models/livro.php";
session_start();


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$resumo = $_POST['resumo'];
$cat = $_POST['categoria'];



if (!empty($FILES['capa']['name'])) {
    $foto = $FILES['capa'];
    $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $nomedafoto = uniqid() . '.' . $extensao;
    $caminho = __DIR__ . "/..imgs/capa/uploads" . $nomedafoto;
    move_uploaded_file($foto['tmp_name'], $caminho);
} else {
    $nomedafoto = null;
}

$livro = new Livro();
$livro->inserir($titulo, $autor, $ano, $resumo, $nomedafoto, $cat);

$_SESSION['aviso'] = "livro cadastrado com sucesso";
header('Location: /projeto/views/livro/gerenciar_livros.php');
exit();
