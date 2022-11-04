<?php
include("C:/xampp/htdocs/Site-Aula-PHP/lib/models/hotel_model.php");
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
    $hotelModel = new HotelModel();
    $hotel = $hotelModel->fromMap($resp[0]); 
    return $hotel; 
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
      foreach($resp as $hot) {
        $hotelModel = new HotelModel();
        $hotel = $hotelModel->fromMap($hot);
        $listHotels[] = $hotel;
      }
      return $listHotels;
  }

} 

?>