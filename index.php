<?php include 'verificaLogin.php'; ?>

<html lang="pt-BR">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Ghostbyte
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-[#0F3B66] text-white">
  <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
   <nav class="flex items-center justify-between py-6">
    <div class="flex items-center space-x-2">
     <div class="w-7 h-7 rounded-full bg-yellow-400 flex items-center justify-center">
      <div class="w-3.5 h-3.5 bg-[#0F3B66] rounded-full ml-1">
      </div>
     </div>
     <span class="font-extrabold text-white text-lg select-none">
      GHOSTBYTE
     </span>
    </div>
    <ul class="hidden md:flex space-x-10 text-white text-sm font-normal">
     <li>
      <a class="hover:underline" href="#">
       Home
      </a>
     </li>
     <li>
      <a class="hover:underline" href="#">
       Produtos
      </a>
     </li>
     <li>
      <a class="hover:underline" href="#">
       Promoções
      </a>
     </li>
    </ul>
    <div class="hidden md:block text-white text-lg cursor-pointer">
     <i class="fas fa-shopping-cart">
     </i>
    <div class="hidden md:block text-white text-sm font-semibold">
    <?php if ($usuarioLogado): ?>
        <span>Bem-vindo, <?= htmlspecialchars($nomeUsuario) ?>!</span>
        <a href="logout.php" class="ml-4 underline">Sair</a>
    <?php else: ?>
        <a href="TelaLogin.php" class="underline">Entrar</a>
    <?php endif; ?>
    </div>

   </nav>
  </header>
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center md:items-start justify-between gap-6 md:gap-0">
   <div class="md:w-1/2">
    <h1 class="text-4xl font-extrabold leading-tight mb-2">
     Grande Oferta!
    </h1>
    <p class="text-lg font-normal mb-6 max-w-md">
     Descontos imperdiveis em produtos selecionados
    </p>
    <button class="bg-yellow-400 text-[#0F3B66] font-semibold rounded-md px-6 py-3 hover:bg-yellow-300 transition">
     Ver Oferta
    </button>
   </div>
   <div class="md:w-1/2 flex justify-center md:justify-end">
    <img alt="Laptop open with blank blue screen on a white background" class="w-[400px] max-w-full" height="250" src="https://storage.googleapis.com/a1aa/image/a2554738-6dd1-4de0-0339-43894b2fa5a7.jpg" width="400"/>
   </div>
  </section>
  <section class="bg-yellow-400 text-[#0F3B66] mt-8">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-around md:justify-center md:space-x-20 font-semibold text-lg">
    <div class="flex items-center space-x-2 cursor-pointer select-none">
     <i class="fas fa-mobile-alt text-xl">
     </i>
     <span>
      Smatphones
     </span>
    </div>
    <div class="flex items-center space-x-2 cursor-pointer select-none">
     <i class="fas fa-laptop text-xl">
     </i>
     <span>
      Notebooks
     </span>
    </div>
    <div class="flex items-center space-x-2 cursor-pointer select-none">
     <i class="fas fa-headphones text-xl">
     </i>
     <span>
      Acessórios
     </span>
    </div>
    <div class="flex items-center space-x-2 cursor-pointer select-none">
     <i class="fas fa-gamepad text-xl">
     </i>
     <span>
      Games
     </span>
    </div>
   </div>
  </section>
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pb-12 bg-white rounded-t-lg">
   <h2 class="text-[#0F3B66] font-semibold text-xl mb-6">
    Produtos em Destaque
   </h2>
   <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
    <article class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
     <img alt="Blue iPhone 12 smartphone front view" class="mb-4" height="160" src="https://storage.googleapis.com/a1aa/image/c456cacb-2eef-41a7-e6d4-1481920c596b.jpg" width="120"/>
     <h3 class="text-[#0F3B66] font-semibold mb-1">
      iPhone 12
     </h3>
     <p class="text-[#0F3B66] font-bold mb-3">
      R$ 4.500
     </p>
     <button class="bg-[#0F3B66] text-white rounded-md px-4 py-2 text-sm font-semibold hover:bg-[#0a2a4a] transition w-full">
      Adicionar a ao Carrinho
     </button>
    </article>
    <article class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
     <img alt="Blue over-ear headphones front view" class="mb-4" height="160" src="https://storage.googleapis.com/a1aa/image/dfbcc4f0-2bdf-437d-5c1c-c03b2bc17c69.jpg" width="120"/>
     <h3 class="text-[#0F3B66] font-semibold mb-1">
      Headphone
     </h3>
     <p class="text-[#0F3B66] font-bold mb-3">
      R$ 799
     </p>
     <button class="bg-[#0F3B66] text-white rounded-md px-4 py-2 text-sm font-semibold hover:bg-[#0a2a4a] transition w-full">
      Adicionar a ao Carrinho
     </button>
    </article>
    <article class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
     <img alt="Yellow smartwatch front view with digital time display" class="mb-4" height="160" src="https://storage.googleapis.com/a1aa/image/ac9df37c-07c6-4b38-54d9-49df840421ff.jpg" width="120"/>
     <h3 class="text-[#0F3B66] font-semibold mb-1">
      Smartwatch
     </h3>
     <p class="text-[#0F3B66] font-bold mb-3">
      R$ 350
     </p>
     <button class="bg-[#0F3B66] text-white rounded-md px-4 py-2 text-sm font-semibold hover:bg-[#0a2a4a] transition w-full">
      Adicionar a ao Carrinho
     </button>
    </article>
    <article class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
     <img alt="Black DSLR camera front view" class="mb-4" height="160" src="https://storage.googleapis.com/a1aa/image/056d205d-b1cb-490c-a905-b840998a4ace.jpg" width="120"/>
     <h3 class="text-[#0F3B66] font-semibold mb-1">
      DSLR camara
     </h3>
     <p class="text-[#0F3B66] font-bold mb-3">
      R$ 3.500
     </p>
     <button class="bg-[#0F3B66] text-white rounded-md px-4 py-2 text-sm font-semibold hover:bg-[#0a2a4a] transition w-full">
      Adicionar a ao Carrinho
     </button>
    </article>
   </div>
  </section>
  <footer class="bg-[#0F3B66] mt-12 py-8">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between text-white text-sm">
    <div class="mb-6 md:mb-0">
     <h3 class="font-semibold mb-2">
      Contato
     </h3>
     <p>
      Termos de Uso
     </p>
    </div>
    <div class="mb-6 md:mb-0">
     <h3 class="font-semibold mb-2">
      Termos de Uso
     </h3>
     <p>
      Política de Privacidade
     </p>
    </div>
    <div class="flex space-x-6 text-lg">
     <a aria-label="Facebook" class="hover:text-yellow-400" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a aria-label="Twitter" class="hover:text-yellow-400" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a aria-label="Instagram" class="hover:text-yellow-400" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
    </div>
   </div>
  </footer>
 </body>
</html>