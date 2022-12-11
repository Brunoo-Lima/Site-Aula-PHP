<?php
session_start();
require '../../../conexao.php';
require '../../../dao/cliente_dao.php';
$clienteDao = new ClienteDaoSql($pdo);

$imagem = $_FILES['imagem'];
$nome = $imagem['name'];
$tmp = $imagem['tmp_name'];
$dot = '.';

$pasta = 'Imagens';
$extensoes = array('jpg');
$tamanho = 1048576;

if(empty($nome)) {
    header('location:editarImagem.php?err=2');
} else {
    $nome = 'profile'.$_SESSION['id'].'.jpg';
    $upload = move_uploaded_file($tmp, 'Imagens/'.$nome);
    if($upload) {
        $clienteDao->updateImage($_SESSION['id'], $nome);
    }
    header('location:../perfil.php');
    $_SESSION['image'] = $nome;
}

?>