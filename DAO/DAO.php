<?php
    namespace PHP_MVC\DAO;
    use \PDO;
    use \PDOException;

    abstract class DAO extends PDO {

        protected $conexao;

        public function __construct() 
        {
            try {
                $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['dbname'];

                $this->conexao = new PDO(
                    $dsn, $_ENV['db']['user'], 
                    $_ENV['db']['pass'], [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]
                );
            } catch (PDOException $err) {
                echo "[X] - Ocorreu um erro inesperado ao tentar se conectar ao MySQL.";
            }
        }
    }