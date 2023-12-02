<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../config/database.php';
include '../models/User.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Verifica se o nome de usuário ou email já existe
if (User::findByUsernameOrEmail($username, $email)) {
    header("Location: ../pages/register.php?error=Usuário ou email já registrado");
    exit;
}

// Criptografa a senha
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Cria um novo usuário
$user = new User();
$user->nome = $username;
$user->email = $email;
$user->senha = $hashed_password;

// Salva o usuário no banco de dados
if ($user->save()) {
    header("Location: ../pages/login.php?success=Registro bem-sucedido");
} else {
    header("Location: ../pages/register.php?error=Erro ao registrar");
}
