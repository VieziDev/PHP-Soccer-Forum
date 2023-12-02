<?php

include '../config/database.php';
include '../models/Post.php';

$conn = new mysqli($servername, $username, $password, $dbname); // Cria uma nova conexão com mysqli

// Checar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

session_start();

if (isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
} else {
    die("Usuário não autenticado.");
}

// Resto do código para salvar o post

$postModel = new Post($conn); // Cria uma nova instância do modelo Post

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

if ($postModel->create($usuario_id, $titulo, $conteudo)) {
    echo "Post criado com sucesso!";
    header("Location: ../pages/view_posts.php");
} else {
    echo "Erro ao criar o post.";
    // Tratamento de erro
}

?>