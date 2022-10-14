<?php
    $host = "localhost";
    $usuario = "root";
    $bd = "hoteldatabase";
    $senha = "";

    $mysqli = new mysqli($host, $usuario, $senha, $bd);

    if($mysqli->connect_errno){
        echo "Falha na Conexão: ".$mysqli->connect_error;
    } else {
        return $mysqli;
    }
?>