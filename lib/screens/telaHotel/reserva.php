<?php
session_start();
include("../../dao/hotel_dao.php");
$hotelDao = new HotelDao(include("../../dao/conexao.php"));
$hotel = $hotelDao->pegarHotelPorId($_GET['hotel_id']);
$json = $hotel['hot_comodidades'];
$arr = json_decode($json);
$comodidades = $arr->{'comodidades'};
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
    <style>
      input[type="date"], textarea {
        background-color : #d1d1d1; 
      }
      input[type="date"]:hover {
        background-color : grey; 
      }
      .text {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        padding: 10px;
      }
      .preco {
        float: right;
        padding: 10px;
        justify: space-between;
        font-weight: bold;
        border: solid 1px grey;
        font-size: 15pt;
        border-radius: 5px;
        box-shadow: -8px 8px 8px -2px grey;
        margin: 20px;
      }
      .texto {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap:20px;
      }
      g {
        color: white;
        padding: 3px 8px 3px 8px;
        border-radius: 15px;
        font-size: 18pt;
        background-color: lime;
      }
      .preco h4 {
        text-align: center;
      }
      input[type = "submit"] {
        width: 100%;
      }
      
      button {
        margin-top: 10px;
        padding: 10px 40px;
        border-radius: 20px;
        border: none;
        width: 100%;
        background-color: #ffa500;
        font-weight: bold;
        font-family: 'Roboto Condensed', sans-serif;
        letter-spacing: 2px;
      }

      .outras {
        padding: 20px 0;
      }

      .outras ul {
        display: grid;
        grid-template-columns: 1fr 1fr;
        list-style: none;
        padding: 0 20px;
        justify-content: space-around;
      }

    </style>
</head>
<body>
    <header>
    <nav id="menu_title">
      <h1 class="logo">BeM Viagens</h1>
      <ul class="nav-list">
        <li><a href="../index.php">Home</a></li>
        <?php
        if(empty($_SESSION['nome'])) {
          echo '<li><a href="../telaCadastro/cadastro.html" class="right" target="_blank">Cadastrar</a></li>';
          echo '<li><a href="../TelaLogin/login.php" class="right" target="_blank">Login</a></li>';
          echo '</ul>';
        }
        ?>
      </ul>
    </nav>
  </header>

    <main>
      <section class="imagem">
        <figure>
          <?php
            echo "<img class='img1'src='".$hotel['hot_image']."' alt='imagem Hotel'>";
          ?>
        </figure>
      </section>

      <section class="conteudo">
        <div class="titulo">
          <?php
            echo "<h1>".$hotel['hot_nome']."</h1>";
          ?>
        </div>
        
        <div class="preco">
        <form action="processo.php" method="POST">  
        <div class="text">
            <h4>Preço da Reserva </h4>
            <?php
              echo "<g> R$ ".$hotel['hot_preco']."</g>";
            ?>  
          </div>
          <div class="texto">
            <label for="tDate">Data de entrada: </label>
            <input class="dataEntrada" type="date" required="required" name="dataEntrada" id="dataEntrada">
          </div>
          <div class="texto">
            <label for="tDate">Data de saída: </label>
            <input class="dataSaida" required="required" type="date" name="dataSaida" id="dataSaida">
          
          </div>
          <?php
            echo "<input name='hotelId' id='hotelId' value='".$hotel['hot_id']."' style='display:none;'>";
            if(empty($_SESSION['nome'])) {
              echo '</form>';
              echo '<input type="submit" onclick="isNotLogged()" value="Reservar">';
            } else {
              echo "<input name='clienteId' id='clienteId' value='".$_SESSION['id']."' style='display:none;'>";
              echo '<input type="submit" value="Reservar">';
              echo "</form>";
            }
          ?>  
        </div>
        <div class="textos">
          <p></p>
           <?php
           if(floatval($hotel['hot_nota']) >= 9.5) $quality = "Excepcional";
           if(floatval($hotel['hot_nota']) >= 7 && floatval($hotel['hot_nota']) < 9.5) $quality = "Boa";
           if(floatval($hotel['hot_nota']) >= 5 && floatval($hotel['hot_nota']) < 7) $quality = "Razoável";
           if(floatval($hotel['hot_nota']) < 5) $quality = "Abaixo da média";
            echo "<h3>".$hotel['hot_nota']."/10 - ".$quality."</h3>";
           ?>   
        </div>

        <div class="acomodacao">
          <h3>Destaques da Acomodação</h3>
          <ul>
            <?php
            if($hotel['hot_cafe'] == 1) {
              echo "<li><i data-feather='coffee'></i> Café da manhã incluso</li>";
            } 
            if($hotel['hot_wifi'] == 1) {
              echo "<li><i data-feather='wifi'></i> Wi-fi</li>"; 
            }
            if($hotel['hot_pet'] == 1) {
              echo "<li><i data-feather='briefcase'></i> Pet friendly</li>";
            } 
            ?>
          </ul>
        </div>

        <div class="outras">
          <h4>Principais comodidades</h4>
          <ul>
            <?php
              foreach ($comodidades as $comodidade) {
                echo "<li>".$comodidade."</li>";
              }
            ?>
          </ul> 
          </div>
      </section>
    </main>

    <footer>
      <p>Site desenvolvido por <strong>Bruno Lima</strong> e <strong>Miguel Marques</strong></p>
    </footer>
    
    <script>
      feather.replace();
      function isNotLogged() {
        alert("Por favor, para efetuar a reserva, faça o login.");
      }
    </script>
    <?php
    if(!empty($_GET['reserva'])) {
      if($_GET['reserva'] == "1") {
        echo "<script>
        (function() {
          alert('Reserva efetuada com sucesso');
        }());
      </script>";
      } else {
        echo "<script>
        (function() {
          alert('Erro ao efetuar reserva');
        }()); </script>";
      }
    }
    ?>
</body>
</html>