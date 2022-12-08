<?php
session_start();
require '../../conexao.php';
require '../../dao/cliente_dao.php';
$clienteDao = new ClienteDaoSql($pdo);

$email = $_POST['usuario'];
$senha = $_POST['senha'];

    $cliente = $clienteDao->findWhere($email, $senha);

    if($cliente == false) {
        header('location: login.php?auth=1');
    } else {
        $_SESSION['nome'] = $cliente->getCli_nome();
        $_SESSION['email'] = $cliente->getCli_email();
        $_SESSION['id'] = $cliente->getCli_id();
        $_SESSION['image'] = $cliente->getCli_image();
        header('location: ../index.php');
    }
    
?>