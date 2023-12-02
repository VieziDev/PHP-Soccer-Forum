<?php
$servername = "localhost";  // Normalmente é 'localhost'
$username = "root";  // Seu nome de usuário do MySQL
$password = "";    // Sua senha do MySQL
$dbname = "soccer_forum_db";  // Nome do seu banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
