<?php
    require '../../conexao.php';
    require '../../dao/reserva_dao.php';
    $reservaDao = new ReservaDaoSql($pdo);
    session_start();
    echo "OLÀ";
    $clienteId = $_POST['clienteId'];
    $hotelId = $_POST['hotelId'];
    $dataEntrada = $_POST['dataEntrada'];
    $dataSaida = $_POST['dataSaida'];
    $reserva = new Reserva();
    $reserva->setCli_id($clienteId);
    $reserva->setHot_id($hotelId);
    $reserva->setRes_data_entrada($dataEntrada);
    $reserva->setRes_data_saida($dataSaida);
    
    $reservaDao->create($reserva);
    header("location: reserva.php?hotel_id=".$hotelId."&reserva=1");
?>