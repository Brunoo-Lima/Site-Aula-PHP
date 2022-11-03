<?php
class ReservaDao{
  private $mysqli;
  function __construct($mysqli)
  {
    $this->mysqli = $mysqli;  
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
      $listReserva = array();
      foreach($resp as $reserva) {
        $reservaModel = new ReservaModel();
        $reserva = $reservaModel->fromMap($reserva);
        $listReserva[] = $reserva;
      }
      return $listReserva;
  }
}

?>