class Hotel{
    private $hot_id;
    private $hot_nome;
    private $hot_logradouro;
    private $hot_numero;
    private $hot_bairro;
    private $hot_cep;
    private $hot_cidade;    
    private $hot_uf;

    //Getters
    function getHot_id() {
        return $this->hot_id;
    }

    function getHot_nome() {
        return $this->hot_nome;
    }
    
    function getHot_logradouro() {
        return $this->hot_logradouro;
    }

    function getHot_numero() {
        return $this->hot_numero;
    }

    function getHot_bairro() {
        return $this->hot_bairro;
    }
    
    function getHot_cep() {
        return $this->hot_cep;
    }

    function getHot_cidade() {
        return $this->hot_cidade;
    }
    
    function getHot_uf() {
        return $this->hot_uf;
    }

    //Setters
    function setHot_id($hot_id) {
        $this->hot_id = $hot_id;
    }

    function setHot_nome($hot_nome) {
        $this->hot_nome = $hot_nome;
    }

    function setHot_logradouro($hot_logradouro) {
        $this->hot_logradouro = $hot_logradouro;
    }

    function setHot_numero($hot_numero) {
        $this->hot_numero = $hot_numero;
    }

    function setHot_bairro($hot_bairro) {
        $this->Hot_bairro = $hot_bairro;
    }
    
    function setHot_cep($hot_cep) {
        $this->Hot_cep = $hot_cep; 
    }

    function setHot_cidade($hot_cidade) {
        $this->hot_cidade = $hot_cidade;
    }
    
    function setHot_uf($hot_uf) {
        $this->Hot_uf = $hot_uf;
    }

}