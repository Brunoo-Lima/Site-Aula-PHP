<?php
session_start();
include("../../models/cliente_model.php");
$mysqli = include("../../dao/conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


    $result = mysqli_query($mysqli, 'SELECT * FROM `cliente` WHERE cli_email = "miguel@miguel.com" AND cli_senha = 1234');
    $row = $result->fetch_all(MYSQLI_ASSOC);
    $cliente = $row[0];

    $_SESSION['email'] = $cliente["cli_email"];
    $_SESSION['nome'] = $cliente["cli_nome"];
    $_SESSION['sexo'] = $cliente["cli_sexo"];
    $_SESSION['id'] = $cliente['cli_id'];
    header('location: ../index.php');

    
?>