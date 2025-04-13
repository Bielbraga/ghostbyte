<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Bem-vindo, <?php echo $_SESSION['usuario']['nome']; ?>!</h2>
<p><a href="logout.php">Sair</a></p>
