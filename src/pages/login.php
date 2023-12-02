<?php include '../components/header.php'; ?>
<?php include '../components/navbar.php'; ?>
<main class="container mt-4 mb-4">
    <h2>Login</h2>
    <p id="error-message"></p>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
        echo '<p style="color:red;">Nome de usuário ou senha incorretos.</p>';
    }
    ?>
    <form action="../controller/authenticate.php" method="post" onsubmit="return validateLoginForm()">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome de Usuário</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</main>
<?php include '../components/footer.php'; ?>