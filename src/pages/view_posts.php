<?php
include '../config/database.php';
include '../models/Post.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

session_start();

if (!isset($_SESSION['usuario_id'])) {
  // Redirecionar para a página de login ou para uma página de erro
  header('Location:login.php');
  exit;
}

$postModel = new Post($conn);
$usuarioId = $_SESSION['usuario_id'];
$posts = $postModel->getByUserId($usuarioId);

?>

<?php include '../components/header.php'; ?>
<link rel="stylesheet" href="../assets/css/style.css">
<?php include '../components/navbar.php'; ?>
<?php include '../components/confirmation_modal.php'; ?>

<main class="container mt-4 mb-4">
  <div class="header-posts mb-2">
    <h2>Meus Posts</h2>
    <a href="create_post.php" class="btn btn-primary">Criar Novo Post</a>
  </div>
  <?php foreach ($posts as $post) : ?>
    <div class="post">
      <div class="header-card">
        <h3><?php echo htmlspecialchars($post['titulo']); ?></h3>
        <div class="mb-4">
          <a href="edit_post.php?post_id=<?php echo $post['post_id']; ?>" class="btn btn-secondary">Editar Post</a>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-post-id="<?php echo $post['post_id']; ?>">
            Excluir
          </button>
        </div>
      </div>
      <p class="text-justify"><?php echo htmlspecialchars($post['conteudo']); ?></p>
      <small>Postado em: <?php echo $post['data_postagem']; ?></small>
    </div>
  <?php endforeach; ?>
</main>
<?php include '../components/footer.php'; ?>