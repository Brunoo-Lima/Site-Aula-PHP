<?php

class Cliente{
    private $cli_id;
    private $cli_nome;
    private $cli_email;
    private $cli_image;
    private $cli_senha;


    function getCli_senha () {
        return $this->cli_senha;
    }

    function getCli_id() {
        return $this->cli_id;
    }

    function getCli_nome() {
        return $this->cli_nome;
    }
    
    function getCli_email() {
        return $this->cli_email;
    }

    function getCli_image() {
        return $this->cli_image;
    }

    function setCli_id($cli_id) {
        $this->cli_id = $cli_id;
    }

    function setCli_nome($cli_nome) {
        $this->cli_nome = $cli_nome;
    }

    function setCli_email($cli_email) {
        $this->cli_email = $cli_email;
    }

    function setCli_image($image) {
        $this->cli_image = $image;
    }

    function setCli_senha($senha) {
        $this->cli_senha = $senha;
    }

    function fromMap($arr) {
        $cliente = new Cliente();
        $cliente->setCli_id($arr['cli_id']);
        $cliente->setCli_nome($arr['cli_nome']);
        $cliente->setCli_email($arr['cli_email']);
        $cliente->setCli_image($arr['cli_image']);
        return $cliente;
    }
}

interface ClienteDao {
    public function create(Cliente $cliente);
    public function findWhere($email, $senha);
    public function updateImage($id, $image);
    public function delete($id);
}
?>