<?php
session_start();
include("../../dao/database.php");
$database = new Database(include("../../dao/conexao.php"));
$resultado = $database->pegarHotelPorId($_GET['hotel_id']);
$resp = array();
while($row = mysqli_fetch_assoc($resultado)){
    $resp[] = $row;
}
$hotel = $resp[0];
$json = $hotel['hot_comodidades'];
$arr = json_decode($json);
$comodidades = $arr->{'comodidades'};
/*$fmt = new NumberFormatter( 'pt_BR', NumberFormatter::CURRENCY );
echo $fmt->formatCurrency(1234567.891234567890000, "BRL")."\n";
echo $fmt->formatCurrency(1234567.891234567890000, "RUR")."\n";*/
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
            echo "<img class='1'src='".$hotel['hot_image']."' alt='imagem Hotel'>";
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
          <h4>Preço da Reserva</h4>
          <?php
            echo "<p>R$ ".$hotel['hot_preco']."</p>";
          ?>
          <input type="submit" value="Reservar" onclick="reservar()">
          <?php
            if(empty($_SESSION['nome'])) {
              echo "<script>
                function reservar() {
                  alert('Por favor, faça o login para realizar a reserva';
                }
              </script>";
            } else {
              echo "<script>
                function reservar() {
                  window.location.replace('processo.php?hotel_id=".$hotel['hot_id']."');
                }
              </script>";
            }
          ?>
        </div>
        
        <div class="textos">
          <p></p>
           <?php
            echo "<h3>".$hotel['hot_nota']."/10 - Excepcional</h3>";
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
    </script>
</body>
</html>