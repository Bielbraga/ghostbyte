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


$stmt = $pdo->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Bem-vindo, <?php echo $_SESSION['usuario']['nome']; ?>!</h2>
<p><a href="carinho.php">Ver carrinho</a></p>
<p><a href="logout.php">Sair</a></p>

<h3>Produtos disponíveis:</h3>
<div id="produtos">
    <?php foreach ($produtos as $produto): ?>
        <div style="border:1px solid #ccc; padding:10px; margin:10px;">
            <h4><?= htmlspecialchars($produto['nome']) ?></h4>
            <p><?= htmlspecialchars($produto['descricao']) ?></p>
            <p><strong>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></strong></p>
            <label>Quantidade: <input type="number" id="qtd-<?= $produto['id'] ?>" value="1" min="1" max="<?= $produto['estoque'] ?>"></label>
            <button onclick="adicionarAoCarrinho(<?= $produto['id'] ?>)">Adicionar ao carrinho</button>
        </div>
    <?php endforeach; ?>
</div>

<script>
function adicionarAoCarrinho(produto_id) {
    const qtdInput = document.getElementById(`qtd-${produto_id}`);
    const quantidade = parseInt(qtdInput.value);

    fetch('carinho.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ produto_id, quantidade })
    })
    .then(res => res.json())
    .then(data => {
        if (data.sucesso) {
            alert("Produto adicionado ao carrinho!");
        } else {
            alert("Erro: " + (data.erro || "não foi possível adicionar."));
        }
    })
    .catch(err => {
        alert("Erro de rede: " + err);
    });
}
</script>
