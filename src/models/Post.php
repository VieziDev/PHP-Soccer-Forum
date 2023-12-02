<?php
class Post
{
  private $conn;

  public function __construct($conn)
  {
    $this->conn = $conn;
  }

  public function create($usuario_id, $titulo, $conteudo)
  {
    date_default_timezone_set('America/Sao_Paulo');

    $data_postagem = date('Y-m-d H:i:s');

    $stmt = $this->conn->prepare("INSERT INTO Posts (usuario_id, titulo, conteudo, data_postagem) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $usuario_id, $titulo, $conteudo, $data_postagem);
    $resultado = $stmt->execute();
    $stmt->close();

    return $resultado;
  }

  public function update($post_id, $titulo, $conteudo)
  {
    $stmt = $this->conn->prepare("UPDATE Posts SET titulo = ?, conteudo = ? WHERE post_id = ?");
    $stmt->bind_param("ssi", $titulo, $conteudo, $post_id);
    return $stmt->execute();
  }

  public function delete($post_id)
  {
    $stmt = $this->conn->prepare("DELETE FROM Posts WHERE post_id = ?");
    $stmt->bind_param("i", $post_id);
    return $stmt->execute();
  }

  public function getById($post_id)
  {
    $stmt = $this->conn->prepare("SELECT * FROM Posts WHERE post_id = ?");
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_assoc();
  }

  public function getByUserId($usuarioId)
  {
    $stmt = $this->conn->prepare("SELECT * FROM Posts WHERE usuario_id = ? ORDER BY data_postagem DESC");
    $stmt->bind_param("i", $usuarioId);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  }

  public function getAll()
  {
    $resultado = $this->conn->query("SELECT * FROM Posts ORDER BY data_postagem DESC");
    return $resultado->fetch_all(MYSQLI_ASSOC);
  }

  // Métodos adicionais para update, delete, etc.
}
