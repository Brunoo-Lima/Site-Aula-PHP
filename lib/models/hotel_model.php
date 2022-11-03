<?php
class HotelModel{
    private $hot_id;
    private $hot_nome;
    private $hot_logradouro;
    private $hot_numero;
    private $hot_bairro;
    private $hot_cep;
    private $hot_cidade;    
    private $hot_uf;
    private $hot_wifi;
    private $hot_cafe;
    private $hot_pet;
    private $hot_preco;
    private $hot_image;

    //Getters
    function getHot_id() {
        return $this->hot_id;
    }

    function getHot_nome() {
        return $this->hot_nome;
    }

    function getHot_wifi() {
        return $this->hot_wifi;
    }

    function getHot_cafe() {
        return $this->hot_cafe;
    }

    function getHot_pet() {
        return $this->hot_pet;
    }

    function getHot_preco() {
        return $this->hot_preco;
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

    function getHot_image() {
        return $this->hot_image;
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

    function setHot_wifi($hot_wifi) {
        $this->hot_wifi = $hot_wifi;
    }

    function setHot_cafe($hot_cafe) {
        $this->hot_cafe = $hot_cafe;
    }

    function setHot_pet($hot_pet) {
        $this->hot_pet = $hot_pet;
    }

    function setHot_preco($hot_preco) {
        $this->hot_preco = $hot_preco;
    }

    function setHot_numero($hot_numero) {
        $this->hot_numero = $hot_numero;
    }

    function setHot_bairro($hot_bairro) {
        $this->hot_bairro = $hot_bairro;
    }
    
    function setHot_cep($hot_cep) {
        $this->hot_cep = $hot_cep; 
    }

    function setHot_cidade($hot_cidade) {
        $this->hot_cidade = $hot_cidade;
    }
    
    function setHot_uf($hot_uf) {
        $this->hot_uf = $hot_uf;
    }

    function setHot_image($image){
        $this->hot_image = $image;
    }

}

?>