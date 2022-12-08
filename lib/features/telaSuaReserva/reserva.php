<?php
    session_start();
    require '../../conexao.php';
    require '../../dao/reserva_dao.php';
    require '../../dao/hotel_dao.php';
    $reservaDao = new ReservaDaoSql($pdo);
    $hotelDao = new HotelDaoSql($pdo);
    $listReservas = $reservaDao->findAllWhere($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas Reservas</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../imagens/icone1.png">
    <link rel="stylesheet" href="reserva.css">
    <style>
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
    </style>
</head>
<body>
    <header>
        <nav id="menu_title">
          <h1 class="logo">BeM Viagens</h1>
          <ul class="nav-list">
            <li><a href="../index.php">Pacotes</a></li>
            <?php
                if(empty($_SESSION['nome'])) {
                echo '<li><a href="telaCadastro/cadastro.html" class="right" target="_blank">Cadastrar</a></li>';
                echo '<li><a href="TelaLogin/login.php" class="right" target="_blank">Login</a></li>';
                echo '</ul>';
                } else {
                echo "</ul>";
                echo '<div class="dropdown" style="float:left;">
                    <button class="dropbtn"><div class="space"><img width="50" height="50" src="../../images/profile.png"> <br>'.$_SESSION['nome'].'</button>
                    <div class="dropdown-content" style="left:0;">
                    <a href="../desconectar.php">Desconectar</a> 
                    </div>
                </div>';
                }
                ?>
          </ul>
        </nav>
      </header>

    <main>

        <h1>Suas Reservas</h1>

        <section class="reserva">
            <?php
                if($listReservas != false) {
                    foreach($listReservas as $reserva) {
                        $hotel = $hotelDao->findWhere($reserva->getHot_id());
                        $status = '';
                        if(date('Y-m-d') > date('Y-m-d', strtotime($reserva->getRes_data_saida()))) $status = "Finalizado";
                        if(date('Y-m-d') <= date('Y-m-d', strtotime($reserva->getRes_data_saida())) and date('Y-m-d') >= date('Y-m-d', strtotime($reserva->getRes_data_entrada()))) $status = "Em andamento";
                        if(date('Y-m-d') < date('Y-m-d', strtotime($reserva->getRes_data_entrada()))) $status = "Pendente"; 
                        echo '
                            <div class="pacotes-reserva">
                                <img src="'.$hotel->getHot_image().'" alt="">
                                <div class="card">
                                    <h3>'.$hotel->getHot_nome().'</h3>
                                    <p>R$ '.$hotel->getHot_preco().'</p>
                                    <div class="status-reserva">
                                    <h4>Status da Reserva</h4>
                                    <p>Data: '.date('d/m/Y', strtotime($reserva->getRes_data_entrada())).'</p>
                                    <p class="status">'.$status.'</p>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "<center><h2>Você ainda não fez nenhuma reserva!</h2></center>";
                }
            ?>
        </section>

    </main>

    <footer>
        <p>Desenvolvido por <strong>Bruno Lima</strong> e <strong>Miguel Estevao</strong></p>
    </footer>
</body>
</html>