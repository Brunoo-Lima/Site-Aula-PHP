<?php
session_start();
include("../../dao/database.php");
$database = new Database(include("../../dao/conexao.php"));

$email = $_POST['tEmail'];
$senha = $_POST['tSenha'];
$nome = $_POST['tNome'];
$sexo = $_POST['tRadio'];

    $database->cadastrarCliente($nome, $email, $senha, $sexo);

    

    header('location: ../telaLogin/login.php');
?>