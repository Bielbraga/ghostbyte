<?php
require 'conexao.php';
require 'Usuario.class.php';

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = new Usuario();
if ($usuario->login($email, $senha)) {
    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('Email ou senha inválidos');location.href='login.php';</script>";
}
?>
