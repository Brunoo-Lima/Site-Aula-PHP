class Database {
    function pegarDadosCliente($cliente) {
        SELECT * FROM cliente WHERE cli_email = ". $cliente->email;
    }

    function cadastrarCliente($cliente) {
        $con = "INSERT INTO cliente(cli_id, cli_nome, cli_email, cli_sexo) VALUES ('', ".$cliente->nome.", ".$cliente->email.", ".$cliente->sexo;
    }

    function pegarHotéis() {
        $con = "SELECT * FROM hotel";
    }

}