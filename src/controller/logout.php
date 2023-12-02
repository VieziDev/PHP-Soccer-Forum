<?php
session_start();

// Limpa todas as variáveis de sessão
$_SESSION = array();

// Se desejar destruir completamente a sessão, remova também o cookie de sessão.
// Isso destruirá a sessão e não apenas os dados da sessão!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destrói a sessão.
session_destroy();

// Redireciona para a página de login ou para a página inicial
header("Location: ../pages/login.php");
exit;
?>
