<?php
class Database {
    private $mysqli = include('./conexao.php');
    function pegarDadosCliente($clienteId, $clienteSenha) {
        $con = "SELECT * FROM cliente WHERE cli_email = ".$clienteId." AND cli_senha = ".$clienteSenha.";";
        $resp = mysqli_query($this->mysqli, $con);
        $cliente = new Cliente();
        $cliente = $cliente->fromMap($resp->fetch_object());
        return $cliente;
    }

    function cadastrarCliente($clienteNome, $clienteEmail, $clienteSenha, $clienteSexo) {
        $con = "INSERT INTO cliente(cli_nome, cli_email, cli_senha, cli_sexo) VALUES ('".$clienteNome."', '".$clienteEmail."', '".$clienteSenha."', '".$clienteSexo."');";
        mysqli_query($this->mysqli, $con);
    }

    function pegarHotéis() {
        $con = "SELECT * FROM hotel;";
        return mysqli_query($this->mysqli, $con);
    }

    function cadastrarReserva($clienteID, $hotelID, $reservaDataEntrada, $reservaDataSaida) {
        $con = "INSERT INTO reserva(cli_id, hot_id, res_data_entrada, res_data_saida) VALUES (".$clienteID.", ".$hotelID.", ".$reservaDataEntrada.", ".$reservaDataSaida.");";
        $resp = mysqli_query($this->mysqli, $con);
        echo $resp;
    }

    function pegarReservas($clienteId) {
        $con = "SELECT * FROM reserva WHERE cli_id = ".$clienteId.";";
        return mysqli_query($this->mysqli, $con);
    }
}
?>
