<?php
require_once __DIR__ . "/../models/usuario.php";

// receber dados do front
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = password_hash($senha, PASSWORD_DEFAULT);

if (!empty($FILES['foto']['name'])) {
    $foto = $FILES['foto'];
    $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $nomedafoto = uniqid() . '.' . $extensao;
    $caminho = __DIR__ . "/..imgs/fotos/uploads" . $nomedafoto;
    move_uploaded_file($foto['tmp_name'], $caminho);
} else {
    $foto = null;
}

//criar um objeto do tipo usuario para usar o inserir 
$usuario = new Usuario();
$usuario->inserir($nome, $email, $senha, $foto);

//redirecionar
header('Location: /projeto/views/usuario/login.php');
exit();
