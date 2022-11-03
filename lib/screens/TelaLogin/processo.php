<?php
session_start();
include("../../dao/cliente_dao.php");
$clienteDao = new ClienteDao(include("../../dao/conexao.php"));

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
echo $usuario;
echo $senha;

    $cliente = $clienteDao->pegarDadosCliente($usuario, $senha);

    $_SESSION['nome'] = $cliente->getCli_nome();
    $_SESSION['email'] = $cliente->getCli_email();
    $_SESSION['id'] = $cliente->getCli_id();
    $_SESSION['image'] = $cliente->getCli_image();
    header('location: ../index.php');
?>