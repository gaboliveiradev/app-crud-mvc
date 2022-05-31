<?php
    class MySQL extends PDO {
        private $dsn = "mysql:host=localhost:3307;dbname=php_mvc";
        private $user = "root";
        private $pass = "bibi2835201819";

        public function __construct() {
            try {
                return parent::__construct(
                    $this->dsn, 
                    $this->user, 
                    $this->pass, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'")
                );
            } catch (Exception $err) {
                echo "[X] - Ocorreu um erro ao tentar se conectar ao banco de dados:<br><br>";
                echo $err;
            }
        }
    }