
  function abrirModalCadastro() {
    document.getElementById('modalCadastro').style.display = 'block';
  }

  function fecharModal() {
    document.getElementById('modalCadastro').style.display = 'none';
  }

  function abrirModal() {
    document.getElementById('modalRecuperarSenha').style.display = 'block';
  }

  function fecharModalRecuperarSenha() {
    document.getElementById('modalRecuperarSenha').style.display = 'none';
  }

  function enviarCodigo() {
    var email = document.getElementById('emailRecuperar').value;
    if (email) {
      document.getElementById('confirmationMessage').style.display = 'block';
      document.getElementById('emailRecuperar').style.display = 'none';
      setTimeout(() => {
        fecharModalRecuperarSenha();
      }, 3000);
    } else {
      alert('Por favor, insira um e-mail válido.');
    }
  }

  window.onclick = function(event) {
    const modalCadastro = document.getElementById('modalCadastro');
    const modalRecuperarSenha = document.getElementById('modalRecuperarSenha');
    if (event.target === modalCadastro) {
      modalCadastro.style.display = "none";
    } else if (event.target === modalRecuperarSenha) {
      modalRecuperarSenha.style.display = "none";
    }
  };