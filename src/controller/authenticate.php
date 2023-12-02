<?php
include '../config/database.php';
include '../models/User.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Busca o usuário pelo nome de usuário
$usuario = User::findByUsername($nome);

if ($usuario && password_verify($senha, $usuario->senha)) {
    // Senha correta, inicie a sessão
    session_start();
    $_SESSION['nome'] = $usuario->nome;
    $_SESSION['usuario_id'] = $usuario->usuario_id;
    header("Location:../pages/view_posts.php");
} else {
    // Falha na autenticação
    header("Location:../pages/login.php?error=invalid");
}
