<?php
session_start();
?>

<header class="bg-dark py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="text-white">Fórum de Futebol Europeu</h1>
                <p class="text-white-50">Discuta tudo sobre o futebol europeu</p>
            </div>
            <div>
                <?php if (isset($_SESSION['nome'])): ?>
                    <a href="../controller/logout.php" class="btn btn-secondary">Logout</a>
                <?php else: ?>
                    <a href="../pages/login.php" class="btn btn-primary">Login</a>
                    <a href="../pages/register.php" class="btn btn-secondary">Registrar</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>



    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="view_posts.php">Início</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                </ul>
            </div>
        </div>
    </nav>