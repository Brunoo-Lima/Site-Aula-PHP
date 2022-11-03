<?php
include("conexao.php");
class ClienteDao extends Conexao {
  function pegarDadosCliente($clienteUsuario, $clienteSenha) {
    $query = "SELECT * FROM cliente WHERE cli_email = '".$clienteUsuario."' AND cli_senha = ".$clienteSenha.";";
    $response = mysqli_query($this->mysqli, $query);
    $resp = array();
    if($response == FALSE) { 
        die(mysqli_error($this->mysqli));
     }
    while($row = mysqli_fetch_assoc($response)){
        $resp[] = $row;
    }
    $resultado = $resp[0];        
    $cliente = new ClienteModel();
    $cliente = $cliente->fromJson($resultado);
    return $cliente;
  }

  function cadastrarCliente($clienteNome, $clienteEmail, $clienteSenha, $clienteSexo) {
      $query = "INSERT INTO cliente(cli_nome, cli_email, cli_senha, cli_sexo) VALUES ('".$clienteNome."', '".$clienteEmail."', '".$clienteSenha."', '".$clienteSexo."');";
      mysqli_query($this->mysqli, $query);
  }
} 

?>