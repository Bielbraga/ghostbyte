<?php
require 'conexao.php';

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$nomeCompleto = $nome . " " . $sobrenome;
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$enderecoCompleto = $endereco . ", " . $numero . " - " . $complemento;

$sql = "INSERT INTO usuarios (nome, email, senha, cpf, cep, endereco) 
        VALUES (:nome, :email, :senha, :cpf, :cep, :endereco)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":nome", $nomeCompleto);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":senha", $senha);
$stmt->bindValue(":cpf", $cpf);
$stmt->bindValue(":cep", $cep);
$stmt->bindValue(":endereco", $enderecoCompleto);

if ($stmt->execute()) {
    echo "<script>alert('Usuário cadastrado com sucesso!');location.href='login.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar usuário.');</script>";
}
?>
