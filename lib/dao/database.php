<?php
include("C:\\xampp\htdocs\Site-Aula-PHP-main/lib/models/cliente_model.php");
class Database {
    public $mysqli;
    function __construct($mysqli) {
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
        $cliente = new ClienteModel();
        $cliente = $cliente->fromJson($resultado);
        return $cliente;
    }

    function cadastrarCliente($clienteNome, $clienteEmail, $clienteSenha, $clienteSexo) {
        $query = "INSERT INTO cliente(cli_nome, cli_email, cli_senha, cli_sexo) VALUES ('".$clienteNome."', '".$clienteEmail."', '".$clienteSenha."', '".$clienteSexo."');";
        mysqli_query($this->mysqli, $query);
    }

    function pegarHotelPorId($hotelId) {
        $query = "SELECT * FROM hotel WHERE hot_id = ".$hotelId.";";
        $response = mysqli_query($this->mysqli, $query);
        $resp = array();
        if($response == FALSE) { 
            die(mysqli_error($this->mysqli));
         }
        while($row = mysqli_fetch_assoc($response)){
            $resp[] = $row;
        }
        $resultado = $resp[0]; 
        return $resultado; 
    }

    function pegarHoteis() {
        $query = "SELECT * FROM hotel;";
        return mysqli_query($this->mysqli, $query);
    }

    function cadastrarReserva($clienteID, $hotelID, $reservaDataEntrada, $reservaDataSaida) {
        $dataEntrada = strval(date('Y-m-d', strtotime($reservaDataEntrada)));
        $dataSaida = strval(date('Y-m-d', strtotime($reservaDataSaida)));
        $query = "INSERT INTO reserva(cli_id, hot_id, res_data_entrada, res_data_saida) VALUES (".$clienteID.", ".$hotelID.", '".$dataEntrada."', '".$dataSaida."');";
        $resp = mysqli_query($this->mysqli, $query);
    }

    function pegarReservas($clienteId) {
        $query = "SELECT * FROM reserva WHERE cli_id = ".$clienteId.";";
        $response = mysqli_query($this->mysqli, $query);
        $resp = array();
        if($response == FALSE) { 
            die(mysqli_error($this->mysqli));
         }
        while($row = mysqli_fetch_assoc($response)){
            $resp[] = $row;
        }
        return $resp;
    }
}
?>
