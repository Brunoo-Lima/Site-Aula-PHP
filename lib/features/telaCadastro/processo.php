<?php
session_start();
require '../../conexao.php';
require '../../dao/cliente_dao.php';
$clienteDao = new ClienteDaoSql($pdo);

$email = $_POST['tEmail'];
$senha = $_POST['tSenha'];
$nome = $_POST['tNome'];

$cliente = new Cliente();
$cliente->setCli_nome($nome);
$cliente->setCli_email($email);
$cliente->setCli_senha(base64_encode($senha));


    $clienteDao->create($cliente);

    

    header('location: ../telaLogin/login.php');
?>