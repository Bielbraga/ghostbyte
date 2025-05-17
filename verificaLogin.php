<?php
session_start();

$usuarioLogado = false;
$nomeUsuario = "";

if (isset($_SESSION['usuario'])) {
    $usuarioLogado = true;
    $nomeUsuario = explode(" ", $_SESSION['usuario']['nome'])[0];
}
?>
