<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=ghostbyte", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}

$cpf = $_SESSION['usuario']['cpf'];

$stmt = $pdo->prepare("
    SELECT c.produto_id, p.nome, p.preco, c.quantidade, (p.preco * c.quantidade) AS total 
    FROM carrinho c 
    JOIN produtos p ON c.produto_id = p.id 
    WHERE c.cpf_usuario = ?
");
$stmt->execute([$cpf]);
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total_geral = array_sum(array_column($itens, 'total'));
?>

<h2>Seu carrinho, <?php echo $_SESSION['usuario']['nome']; ?>!</h2>
<p><a href="index.php">Voltar</a> | <a href="logout.php">Sair</a></p>

<?php if (count($itens) > 0): ?>
    <form method="post" action="atualizar_carrinho.php">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Produto</th>
                <th>Preço Unitário</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($itens as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['nome']) ?></td>
                    <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                    <td>
                        <input type="number" name="quantidades[<?= $item['produto_id'] ?>]" value="<?= $item['quantidade'] ?>" min="1">
                    </td>
                    <td>R$ <?= number_format($item['total'], 2, ',', '.') ?></td>
                    <td>
                        <button type="submit" name="remover" value="<?= $item['produto_id'] ?>">Remover</button>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3" align="right"><strong>Total geral:</strong></td>
                <td colspan="2"><strong>R$ <?= number_format($total_geral, 2, ',', '.') ?></strong></td>
            </tr>
        </table>
        <br>
        <button type="submit" name="atualizar">Atualizar Carrinho</button>
    </form>
<?php else: ?>
    <p>Seu carrinho está vazio.</p>
<?php endif; ?>
