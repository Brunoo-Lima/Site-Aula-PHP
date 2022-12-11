<?php
session_start();
require '../conexao.php';
require '../dao/hotel_dao.php';
$hotelDao = new HotelDaoSql($pdo);
$listHotels = $hotelDao->findAll();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Hoteis</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link type="image/png" sizes="16x16" rel="icon" href="../imagens/icone1.png">
  <link rel="stylesheet" href="estilo.css">
  <style>
    .space{
      margin-left: 10%;
      margin-right: 0;
      text-align: center;
   }
   .dropbtn {
      background-color: transparent;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}
    .dropdown:hover .dropdown-content {display: block;}

    #nomes-tela {
       text-decoration: none;
    }

    #nomes-tela:visited {
      color: black;
    }
  </style>
</head>

<body>
  <header>
    <nav id="menu_title">
      <h1 class="logo">BeM Viagens</h1>
      <ul class="nav-list">
        <li><a href="#">Home</a></li>
        <li><a href="#Conheça nossos Pacotes">Pacotes</a></li>
        <li><a href="#Serviços">Serviços</a></li>
        <?php
        if(empty($_SESSION['nome'])) {
          echo '<li><a href="telaCadastro/cadastro.html" class="right" target="_blank">Cadastrar</a></li>';
          echo '<li><a href="TelaLogin/login.php" class="right" target="_blank">Login</a></li>';
          echo '</ul>';
        } else {
          echo '<li><a href="./telaSuaReserva/reserva.php" target="_blank">Reservas</a></li>';
          echo "</ul>";
          echo '<div class="dropdown" style="float:left;">
            <a href="telaPerfil/perfil.php"><button class="dropbtn"><div class="space"><img width="50" height="50" src="../images/profile.png"> <br>'.$_SESSION['nome'].'</button></a>
            <div class="dropdown-content" style="left:0;">
              <a href="desconectar.php">Desconectar</a> 
            </div>
          </div>';
        }
        ?>
    </nav>
  </header>

  <main>

    <a name="Conheça nossos Pacotes"></a>
    <section class="pacotes">

      <h1 class="titulo-pct">Conheça nossos pacotes</h1>

      <div class="class pacotes-cards">
        <!--Pacote 1-->

      <?php
        foreach($listHotels as $hotel){
          echo '<a id="nomes-tela" href="./telaHotel/reserva.php?hotel_id='.$hotel->getHot_id().'">';
          echo "<div class='card'>";
          echo "<div class='card-tag card-tag-top'>";
          echo "<p>Promoção</p>";
          echo "</div>";
          echo "<div class='card-tag card-tag-bottom'>";
          echo "<p>R$ ".$hotel->getHot_preco()."</p>";
          echo "</div>";
          echo "<img class='card-image' src='".$hotel->getHot_image()."' alt='Orlando'>";
          echo "<div class='card-content'>";
          echo "<h1>".$hotel->getHot_nome()."</h1>";
          echo "<ul>";
              if($hotel->getHot_cafe() == 1) {
                echo "<li><i data-feather='coffee'></i> Café da manhã incluso</li>";
              } 
              if($hotel->getHot_wifi() == 1) {
                echo "<li><i data-feather='wifi'></i> Wi-fi</li>"; 
              }
              if($hotel->getHot_pet() == 1) {
                echo "<li><i data-feather='briefcase'></i> Pet friendly</li>";
              } 
          echo  "</ul>";
          echo "</div>";
          echo "</div>";
          echo "</a>";
        }
      ?>
      </div>
    </section>

    <a name="Serviços"></a>
    <section class="servicos">
      <h1 class="servicos-title">Serviços incluido nos pacotes</h1>
      <div class="servicos-cards">
        <div class="card">
          <i data-feather="map"></i>
          <div class="cards-textos">
            <h3>Tours-guiados</h3>
            <p>Temos guias profissionais com muita experiência
              onde mostraram tudo que você tem direito e te guiaram pelos
              lugares mais atrativos!</p>
          </div>
          <button>Saiba mais</button>
        </div>

        <div class="card">
          <i data-feather="camera"></i>
          <div class="cards-textos">
            <h3>Fotografias profissional</h3>
            <p>Temos os melhores fotográfos disponiveis para atendê-los
              nos passeios, tirando fotos lindas e profissionais!</p>
          </div>
          <button>Saiba mais</button>
        </div>

        <div class="card">
          <i data-feather="navigation"></i>
          <div class="cards-textos">
            <h3>Aluguel de veiculos</h3>
            <p>Com a nossa parceira CarRent você pode alugar um carro e sair
              curtindo pela cidade!</p>
          </div>
          <button>Saiba mais</button>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>Site desenvolvido por <strong>Bruno Lima</strong> e <strong>Miguel Estevao</strong></p>
  </footer>

  <script>
    feather.replace()
  </script>

</body>

</html>