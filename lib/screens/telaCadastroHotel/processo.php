<?php
    session_start();
    $mysqli = include("../../dao/conexao.php");

    $hot_id = $_GET["hotel"];
    $result = mysqli_query($mysqli, "INSERT INTO reserva(cli_id, hot_id, res_id, res_data_entrada, res_data_saida) VALUES (".$_SESSION["id"].", ".$hot_id.", '', '', '')");
    header('location: ../index.php');
?>