class Reserva{
    private $cli_id;
    private $hot_id;
    private $res_id;
    private $res_data_entrada;
    private $res_data_saida;


    //Getters
    function getCli_id() {
        return $this->cli_id;
    }

    function getHot_id() {
        return $this->hot_id;
    }
    
    function getRes_data_entrada() {
        return $this->$res_data_entrada;
    }

    function getRes_data_saida() {
        return $this->res_data_saida;
    }

    function getRes_id() {
        return $this->res_id;
    }

    //Setters
    function setCli_id($cli_id) {
        $this->cli_id = $cli_id;
    }

    function setHot_id($Hot_id) {
        $this->hot_id = $Hot_id;
    }

    function setRes_id($res_id) {
        $this->res_id = $res_id;
    }

    function setRes_data_entrada($data_entrada) {
        $this->res_data_entrada = $data_entrada;
    }

    function setRes_data_saida($data_saida) {
        $this->res_data_saida = $data_saida;
    }

}