<?php
try {
    $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=ghostbyte", "postgres", "123456");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
?>
