<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <link rel="stylesheet" href="./editarImagem.css">
</head>
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
<body>
  <header>
    <nav id="menu_title">
      <h1 class="logo">BeM Viagens</h1>
      <ul class="nav-list">
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../../index.php#Conheça nossos Pacotes">Pacotes</a></li>
        <li><a href="../../index.php#Serviços">Serviços</a></li>
        <?php
        if(empty($_SESSION['nome'])) {
          echo '<li><a href="telaCadastro/cadastro.html" class="right" target="_blank">Cadastrar</a></li>';
          echo '<li><a href="TelaLogin/login.php" class="right" target="_blank">Login</a></li>';
          echo '</ul>';
        } else {
          echo '<li><a href="./telaSuaReserva/reserva.php" target="_blank">Reservas</a></li>';
          echo "</ul>";
          echo '<div class="dropdown" style="float:left;">
            <button class="dropbtn"><div class="space"><img width="50" height="50" src="../../../images/profile.png"> <br>'.$_SESSION['nome'].'</button>
            <div class="dropdown-content" style="left:0;">
              <a href="desconectar.php">Desconectar</a> 
            </div>
          </div>';
        }
        ?>
    </nav>
  </header>
  <main>
    <form method="POST" action="processo.php" enctype="multipart/form-data">>
      <section class="alterar-dados">
        <div class="info-dados">
          <h1 class="title">Alterar imagem</h1>
          <div class="alterar senha">
            <input type="file" id="senhanova" class="senha" name='imagem' placeholder="Digite sua nova senha" size="8">
          </div>

          <div class="salvar">
            <input type="submit" class="btn" value="Salvar" id="save">

            <input type="button" class="btn" value="Cancelar" id="cancel">
          </div>
        </div>
      </section>
    </form>
  </main>

  <footer>
    <p>Site desenvolvido por <strong>Bruno Lima</strong> e <strong>Miguel Estevao</strong>
    </p>
  </footer>
  <?php
  if(!empty($_GET['err'])) {
    if($_GET['err'] == '1') {
      echo "<script>
      (function() {
        alert('Extensão não permitida.');
      }());
    </script>";
    }
    if($_GET['err'] == '2') {
      echo "<script>
      (function() {
        alert('Por favor, insira uma imagem.');
      }()); </script>";
    }
  }
  ?>
</body>

</html>