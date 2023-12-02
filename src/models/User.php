<?php
class User {
  public $usuario_id;
  public $nome;
  public $email;
  public $senha;

  // Construtor
  public function __construct() {
      // Inicializações, se necessário
  }

  // Salva o usuário no banco de dados
  public function save() {
      global $conn; // Use a conexão do banco de dados global

      $sql = "INSERT INTO Usuarios (nome, email, senha) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sss", $this->nome, $this->email, $this->senha);

      if ($stmt->execute()) {
          $this->usuario_id = $conn->insert_id; // Define o ID do usuário
          return true;
      } else {
          return false;
      }
  }

  // Encontra um usuário pelo nome de usuário ou email
  public static function findByUsernameOrEmail($nome, $email) {
      global $conn; // Use a conexão do banco de dados global

      $sql = "SELECT * FROM Usuarios WHERE nome = ? OR email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ss", $nome, $email);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
          $userData = $result->fetch_assoc();
          $user = new User();
          $user->usuario_id = $userData['usuario_id'];
          $user->nome = $userData['nome'];
          $user->email = $userData['email'];
          $user->senha = $userData['senha'];
          return $user;
      } else {
          return null;
      }
  }

   // Encontra um usuário pelo nome de usuário
   public static function findByUsername($nome) {
    global $conn; // Use a conexão do banco de dados global

    $sql = "SELECT * FROM Usuarios WHERE nome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $infoUsuario = $result->fetch_assoc();
        $usuario = new User();
        $usuario->usuario_id = $infoUsuario['usuario_id'];
        $usuario->nome = $infoUsuario['nome'];
        $usuario->email = $infoUsuario['email'];
        $usuario->senha = $infoUsuario['senha'];
        return $usuario;
    } else {
        return null;
    }
}

}

?>