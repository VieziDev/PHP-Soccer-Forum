<?php
// Supondo que você já tem a conexão com o banco de dados
include '../config/database.php';
include '../models/Post.php';

if (isset($_GET['post_id'])) {
  $postModel = new Post($conn);
  $postModel->delete($_GET['post_id']);

  // Redirecionar de volta para a página de visualização de posts
  header("Location: ../pages/view_posts.php");
  exit;
}
