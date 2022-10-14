<?php
session_start();
$mysqli = include("../dao/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link type="image/png" sizes="16x16" rel="icon" href="../../imagens/icone1.png">
    <link rel="stylesheet" href="stylehotel.css">
</head>
<body>
    <header>
    <nav id="menu_title">
      <h1 class="logo">BeM Viagens</h1>
      <ul class="nav-list">
        <li><a href="/lib/screens/index.html">Home</a></li>
        <li><a href="/lib/screens/tela de cadastro/cadastro.html" class="right" target="_blank">Cadastrar</a></li>
        <li><a href="/lib/screens/Tela de login/login.php" class="right" target="_blank">Login</a></li>
      </ul>
    </nav>
  </header>

    <main>
      <section class="imagem">
        <figure>
          <img class="1"src="https://images.unsplash.com/photo-1543489822-c49534f3271f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="imagem Hotel">
        </figure>
      </section>

      <section class="conteudo">
        <div class="titulo">
          <h1>Hotel Premium</h1>
        </div>
        
        <div class="preco">
          <h4>Preço da Reserva</h4>
          <p>R$ 8.500,00</p>
          <input type="submit" value="Reservar">
        </div>
        
        <div class="textos">
          <p>É um Hotel 5 estrelas, ficando próximo aos principais centros turisticos!</p>

          <h3>9.8/10 - Excepcional</h3>
        </div>

        <div class="acomodacao">
          <h3>Destaques da Acomodação</h3>
          <ul>
            <li><i data-feather='coffee'></i> Café da manhã incluso</li>
              <li><i data-feather='wifi'></i> Wi-fi</li> 
              <li><i data-feather='briefcase'></i> Pet friendly</li> 
          </ul>
        </div>

        <div class="outras">
          <h4>Principais comodidades</h4>
          <ul>
            <li>Serviço de arrumação diário</li>
            <li>Na praia</li>
            <li>Restaurantes e 2 bares/lounges</li>
            <li>Piscina externa</li>
            <li>Terraço na cobertura</li>
            <li>Academia</li>
            <li>Sauna seca</li>
            <li>Sauna a vapor</li>
            <li>Barracas de praia grátis</li>
            <li>Guarda-sóis</li>
            <li>Espreguiçadeiras</li>
            <li>Toalhas de praia</li>
          </ul> 
          </div>
      </section>
    </main>

    <footer>
      <p>Site desenvolvido por <strong>Bruno Lima</strong> e <strong>Miguel Marques</strong></p>
    </footer>
    
    <script>
      feather.replace();
    </script>
</body>
</html>