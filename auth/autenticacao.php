<?php
require_once __DIR__ . "/../configs/conexao.php";

class Autenticacao
{
  public static function logar($email, $senha)
  {
    session_start();

    $sql = "SELECT * FROM usuario WHERE email = :email";
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
      $_SESSION['id_usuario'] = $usuario['id_usuario'];
      $_SESSION['nome'] = $usuario['nome'];
      $_SESSION['email'] = $usuario['email'];
      $_SESSION['foto'] = $usuario['foto'];

      header('Location: /projeto/views/usuario/perfil.php');
      exit();
    }


    header("location: /projeto/views/usuario/login.php");
    exit();
    
    $_SESSION['aviso'] = "email ou senha invalidos";
    header("Location: /projeto/views/usuario/login.php");
    exit();
  }



  public static function estaAutenticado()
  {
    return isset($_SESSION['id']);
  }

  public static function logout()
  {
    session_start();
    $_SESSION = [];
    session_destroy();

    header('Location: /projeto/views/usuario/perfil.php');
    exit();
  }

  public static function exigirAutenticacao()
  {
    if (!self::estaAutenticado()) {
      header('Location: /projeto/views/usuario/perfil.php');
      exit();
    }
  }
}
