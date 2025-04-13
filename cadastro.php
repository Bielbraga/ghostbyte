<!DOCTYPE html>
<html>
<head><title>Cadastro</title></head>
<body>
<h2>Cadastro</h2>
<form action="SalvaUser.php" method="POST">
  <input type="text" name="nome" placeholder="Nome" required><br>
  <input type="text" name="sobrenome" placeholder="Sobrenome" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="senha" placeholder="Senha" required><br>
  <input type="text" name="cpf" placeholder="CPF" required><br>
  <input type="text" name="cep" placeholder="CEP" required><br>
  <input type="text" name="endereco" placeholder="Endereço" required><br>
  <input type="text" name="numero" placeholder="Número" required><br>
  <input type="text" name="complemento" placeholder="Complemento"><br>
  <button type="submit">Cadastrar</button>
</form>
</body>
</html>
