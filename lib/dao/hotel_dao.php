<?php
class HotelDao {
  private $mysqli;
  function __construct($mysqli)
  {
    $this->mysqli = $mysqli;  
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
    $response = mysqli_query($this->mysqli, $query);
    $resp = array();
      if($response == FALSE) { 
          die(mysqli_error($this->mysqli));
      }
      while($row = mysqli_fetch_assoc($response)){
          $resp[] = $row;
      }
      $listHotels = array();
      foreach($resp as $reserva) {
        $hotelModel = new HotelModel();
        $hotel = $hotelModel->fromMap($reserva);
        $listHotels[] = $reserva;
      }
      return $listHotels;
  }

} 

?>