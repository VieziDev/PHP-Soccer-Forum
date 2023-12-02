<?php
include '../config/database.php'; // Conexão com o banco de dados
include '../models/Post.php';         // Inclui a classe Post

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$postModel = new Post($conn);
$postId = $_POST['post_id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

if ($postModel->update($postId, $titulo, $conteudo)) {
    echo "Post atualizado com sucesso!";
    header("Location: ../pages/view_posts.php");
} else {
    echo "Erro ao atualizar o post.";
}
