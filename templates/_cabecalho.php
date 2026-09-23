<?php
require_once __DIR__ . "/../auth/autenticacao.php";
session_start();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>
    <link rel="stylesheet" href="/projeto/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    

</head>

<body>
    <header>
        <img src="https://picsum.photos/100" alt="" class="logo">

        <nav>
            <a href="/projeto/index.php">inicio</a>
            <?php if(!Autenticacao::estaAutenticado()): ?>

            <a href="/projeto/views/usuario/cadastro.php">cadastro</a>
            <a href="/projeto/views/usuario/login.php">entrar</a>
            <?php else: ?>

            <a href="/projeto/views/usuario/perfil.php">perfil</a>
            <a href="/projeto/controllers/logout_controller.php">sair</a>
            <?php endif; ?>
        </nav>
    </header>
    <?php 
require_once __DIR__ . "/_avisos.php";
?>