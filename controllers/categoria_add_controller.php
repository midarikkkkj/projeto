<?php
require_once __DIR__ . "/../models/categoria.php";

$nome = $_POST['nome'];

$categoria = New Categoria();
$categoria->inserir($nome);

$_SESSION['aviso'] = "Categoria inserida com sucesso";
header('Location: /projeto/views/categoria/gerenciar_categoria.php');
exit();