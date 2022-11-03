<?php
    class Conexao {
        public $host = "localhost";
        public $usuario = "root";
        public $bd = "hoteldatabase";
        public $senha = "";
    
        public $mysqli = new mysqli($host, $usuario, $senha, $bd);
    
        function checkIntegrity () {
            if($this->mysqli->connect_errno){
                echo "Falha na Conexão: ".$this->mysqli->connect_error;
            }
        }
    }
?>