<?php
include '../config/database.php'; // Conexão com o banco de dados
include '../models/Post.php';         // Inclui a classe Post

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Busca o post específico
$postModel = new Post($conn);
$post = $postModel->getById($_GET['post_id']);

include '../components/header.php';
include '../components/navbar.php';
?>

<main class="container mt-4 mb-4">
  <h2>Editar Post</h2>
  <form action="../controller/save_edit.php" method="post">
    <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
    <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo htmlspecialchars($post['titulo']); ?>" required>
    </div>
    <div class="mb-3">
      <label for="conteudo" class="form-label">Conteúdo</label>
      <textarea class="form-control" id="conteudo" name="conteudo" rows="5" required><?php echo htmlspecialchars($post['conteudo']); ?></textarea>
    </div>
    <button type="submit" class="btn btn-success">Salvar Alterações</button>
  </form>
</main>

<?php include '../components/footer.php'; ?>