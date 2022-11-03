<?php
session_start();
include("../../dao/cliente_dao.php");
$clienteDao = new ClienteDao(include("../../dao/conexao.php"));

$email = $_POST['tEmail'];
$senha = $_POST['tSenha'];
$nome = $_POST['tNome'];
$sexo = $_POST['tRadio'];

    $clienteDao->cadastrarCliente($nome, $email, $senha, $sexo);

    

    header('location: ../telaLogin/login.php');
?>