<?php
require_once 'C:xampp/htdocs/Site-Aula-PHP/lib/models/cliente.php';

class ClienteDaoSql implements ClienteDao {
    private $pdo;
    public function __construct(PDO $pdo)
    {
       $this->pdo = $pdo; 
    }

    public function create(Cliente $cliente){
        $sql = $this->pdo->prepare("INSERT INTO cliente(cli_nome, cli_email, cli_senha) VALUES (:nome, :email, :senha)");
        $sql->bindValue(':nome', $cliente->getCli_nome());
        $sql->bindValue(':email', $cliente->getCli_email());
        $sql->bindValue(':senha', $cliente->getCli_senha());
        $sql->execute();
    }

    public function findWhere($email, $senha){
        $sql = $this->pdo->prepare("SELECT * FROM cliente WHERE cli_email=:email AND cli_senha=:senha");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', base64_encode($senha));
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $c = new Cliente();
            $cliente = $c->fromMap($data);
            return $cliente;
        }
        return false;
    }
    
    public function update(Cliente $cliente){
        $sql = $this->pdo->prepare("UPDATE cliente SET cli_nome = :nome, cli_email = :email, cli_senha = :senha, cli_image = :imagem WHERE cli_id = :id");
        $sql->bindValue(':nome', $cliente->getCli_nome());
        $sql->bindValue(':email', $cliente->getCli_email());
        $sql->bindValue(':senha', $cliente->getCli_senha());
        $sql->bindValue(':imagem', $cliente->getCli_image());
        $sql->execute();
    }
    public function delete($id){
        $sql = $this->pdo->prepare("DELETE FROM cliente WHERE cli_id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}
?>