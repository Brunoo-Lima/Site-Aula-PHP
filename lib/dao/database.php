class Database {
    function pegarDadosCliente($cliente) {
        $con = "SELECT * FROM cliente WHERE cli_email = ".$cliente->getCli_email().";";
    }

    function cadastrarCliente($cliente) {
        $con = "INSERT INTO cliente(cli_id, cli_nome, cli_email, cli_sexo) VALUES ('', ".$cliente->getCli_nome().", ".$cliente->getCli_email().", ".$cliente->getCli_sexo().");";
    }

    function pegarHotéis() {
        $con = "SELECT * FROM hotel;";
    }

    function cadastrarReserva($reserva) {
        $con = "INSERT INTO reserva(cli_id, hot_id, res_id, res_data_entrada, res_data_saida) VALUES (".$reserva->getCli_id().", ".$reserva->getHot_id().", '', ".$reserva->getRes_data_entrada().", ".$reserva->getRes_data_saida().");";
    }

    function pegarReservas($cliente) {
        $con = "SELECT * FROM reserva WHERE cli_id = ".$cliente->getCli_id().";";
    }
}
