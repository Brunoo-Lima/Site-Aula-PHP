<?php
    include("../../dao/reserva_dao.php");
    $reservaDao = new ReservaDao(include("../../dao/conexao.php"));
    session_start();
    
    $clienteId = $_POST['clienteId'];
    $hotelId = $_POST['hotelId'];
    $dataEntrada = $_POST['dataEntrada'];
    $dataSaida = $_POST['dataSaida'];
    
    
    $reservaDao->cadastrarReserva($clienteId, $hotelId, $dataEntrada, $dataSaida);
    header("location: reserva.php?hotel_id=".$hotelId."&reserva=1");
?>