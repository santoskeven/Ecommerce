<?php

    Class Conexao extends Config{
        private $host, $user, $senha, $banco;

        protected $obj, $itens = array(), $prefix;

        function __construct () {
            $this -> host   = self::BD_HOST;
            $this -> user = self::BD_USER;
            $this -> senha = self::BD_SENHA;
            $this -> banco = self::BD_BANCO;
            $this -> prefix = self::BD_PREFIX;

            try {
                if($this -> conectar() == null){
                    $this -> conectar();
                    echo('<h2> SUCESSO AO CONECTAR NO BANCO DE DADOS </h2');
                }
            } catch (PDOException $e) {
                die($e -> getMessage() . '<h2> Error ao conectar no banco de dados! </h2>');
            }   

        }

        function LinkAtivo($link){
            $url = explode('/',@$_GET['pag'])[0];

            if($url == $link){
                echo 'class="link_Atc"';
            }else{
                return false;
            }
        }

        private function conectar () {
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ];
            $link = new PDO("mysql:host={$this -> host}; dbname={$this -> banco}",
            $this -> user, $this -> senha, $options);

            return $link;
        }

        function ExecuteSQL ($query, array $params = NULL) {
            $this->obj = $this-> conectar() -> prepare($query);
            return $this->obj->execute();
        }

        function ListarDados (){
            return $this -> obj -> fetch(PDO::FETCH_ASSOC);
        }

        function ListarDadosAll (){
            return $this -> obj -> fetchAll();
        }

        function TotalDados (){
            return $this-> obj -> rowCount();
        }

        function GetItens (){
            return $this -> itens;
        }

    }

?>