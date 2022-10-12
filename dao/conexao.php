<?php
    $host = "localhost";
    $usuario = "root";
    $bd = "hoteldatabase";
    $senha = "";

    $mysqli = new mysqli($host, $usuario, $senha, $bd);

    if($mysqli->connect_errno != null) {

    }
    
?>