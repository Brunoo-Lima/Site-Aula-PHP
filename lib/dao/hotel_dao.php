<?php
require_once 'C:xampp/htdocs/Site-Aula-PHP/lib/models/hotel.php';

class HotelDaoSql implements HotelDao {
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(){
        $array = [];
        $sql = $this->pdo->query("SELECT * FROM hotel");
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach($data as $item) {
                $h = new Hotel();
                $hotel = $h->fromMap($item);

                $array[] = $hotel;
            }
        }
        return $array;
    }

    public function findWhere($id){
        $sql = $this->pdo->prepare("SELECT * FROM hotel WHERE hot_id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        $data = $sql->fetch();
        $h = new Hotel();
        $hotel = $h->fromMap($data);
        return $hotel;
    }
}
?>