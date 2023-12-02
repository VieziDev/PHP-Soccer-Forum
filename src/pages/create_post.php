<?php include '../components/header.php';?>
<?php include '../components/navbar.php';?>
<main class="container mt-4 mb-4">
        <h2>Criar Novo Post</h2>
        <form action="../controller/save_post.php" method="post">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar Post</button>
        </form>
    </main>
<?php include '../components/footer.php';?>