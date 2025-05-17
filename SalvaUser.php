<?php
require 'conexao.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]); 
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];

if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($telefone)) {
    echo "<script>alert('Preencha todos os campos obrigatórios.');history.back();</script>";
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha, cpf, telefone) 
        VALUES (:nome, :email, :senha, :cpf, :telefone)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":senha", $senha);
$stmt->bindValue(":cpf", $cpf);
$stmt->bindValue(":telefone", $telefone);

try {
    $stmt->execute();
    echo "<script>alert('Usuário cadastrado com sucesso!');location.href='TelaLogin.php';</script>";
} catch (PDOException $e) {
    echo "<script>alert('Erro ao cadastrar usuário: " . $e->getMessage() . "');</script>";
}
?>
