<?php
class Usuario {
    public function login($email, $senha) {
        require 'conexao.php'; 
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            session_start();
            $_SESSION['usuario'] = $sql->fetch(PDO::FETCH_ASSOC);
            return true;
        }
        return false;
    }
}
?>
