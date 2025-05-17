<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - GhostByte</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
  <div class="logo">
    <span>●</span> GHOSTBYTE
  </div>
  <nav>
    <a href="#">Home</a>
    <a href="#">Produtos</a>
    <a href="#">Promoções</a>
  </nav>
  <a href="carrinho.html" class="cart-icon">🛒</a>
</header>

<div class="login-container">
  <h2>Login</h2>
  <form action="logar.php" method="POST">
    <input type="email" name="email" placeholder="E-mail" required />
    <input type="password" name="senha" placeholder="Senha" required />
    <button type="submit" class="btn">Entrar</button>
  </form>
  <span class="link" onclick="abrirModal()">Esqueci minha senha</span>
  <span class="link" onclick="abrirModalCadastro()">Não é cadastrado ainda? Cadastre-se</span>
</div>

<!-- Modal de Cadastro -->
<div id="modalCadastro" class="modal">
  <div class="modal-content">
    <span class="close" onclick="fecharModal()">&times;</span>
    <form action="SalvaUser.php" method="POST">
      <h3>Cadastro</h3>
      <input type="text" name="nome" placeholder="Nome completo" required />
      <input type="email" name="email" placeholder="E-mail" required />
      <input type="password" name="senha" placeholder="Senha" required />
      <input type="tel" name="telefone" placeholder="Telefone" required />
      <input type="text" name="cpf" placeholder="CPF" required />

      <div class="gender-options">
        <label>
          <input type="radio" name="genero" value="Feminino" required /> Feminino
        </label>
        <label>
          <input type="radio" name="genero" value="Masculino" required /> Masculino
        </label>
      </div>

      <button type="submit" class="btn">Cadastrar</button>
    </form>
  </div>
</div>


<div id="modalRecuperarSenha" class="modal">
  <div class="modal-content">
    <span class="close" onclick="fecharModalRecuperarSenha()">&times;</span>
    <h3>Recuperar Senha</h3>
    <p>Informe seu e-mail para recuperar a senha.</p>
    <input type="email" id="emailRecuperar" placeholder="E-mail" required />
    <button class="btn" onclick="enviarCodigo()">Enviar código de recuperação</button>
    <p id="confirmationMessage" class="confirmation-message" style="display: none;">
      Código enviado, verifique sua caixa de e-mail.
    </p>
  </div>
</div>

<script src="assets/script.js"></script>

</body>
</html>
