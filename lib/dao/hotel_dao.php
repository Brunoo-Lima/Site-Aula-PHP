<?php
include("conexao.php");
class HotelDao extends Conexao {
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

} 

?>