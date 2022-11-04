<?php
include("C:/xampp/htdocs/Site-Aula-PHP/lib/models/cliente_model.php");
class ClienteDao {
  private $mysqli;
  function __construct($mysqli)
  {
    $this->mysqli = $mysqli;  
  }
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
    $clienteModel = new ClienteModel();
    $cliente = $clienteModel->fromMap($resultado);
    return $cliente;
  }

  function cadastrarCliente($clienteNome, $clienteEmail, $clienteSenha) {
      $query = "INSERT INTO cliente(cli_nome, cli_email, cli_senha) VALUES ('".$clienteNome."', '".$clienteEmail."', '".$clienteSenha."');";
      mysqli_query($this->mysqli, $query);
  }
} 

?>