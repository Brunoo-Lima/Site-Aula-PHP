<?php
require_once 'C:xampp/htdocs/Site-Aula-PHP/lib/models/reserva.php';

class ReservaDaoSql implements ReservaDao {
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function findAllWhere($id){
        $reservas = [];
        $sql = $this->pdo->prepare("SELECT * FROM reserva WHERE cli_id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
            foreach($data as $item) {
                $h = new Reserva();
                $hotel = $h->fromMap($item);
                $reservas[] = $hotel;
            }
        }
        return $reservas;
    }

    public function create(Reserva $reserva) {
        $sql = $this->pdo->prepare("INSERT INTO reserva(cli_id, hot_id, res_data_entrada, res_data_saida) VALUES (:cli_id, :hot_id, :data_entrada, :data_saida)");
        $sql->bindValue(":cli_id", $reserva->getCli_id());
        $sql->bindValue(":hot_id", $reserva->getHot_id());
        $sql->bindValue(":data_entrada", $reserva->getRes_data_entrada());
        $sql->bindValue(":data_saida", $reserva->getRes_data_saida());
        $sql->execute();
    }
}
?>