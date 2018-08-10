<?php

    namespace sistema;

    use \PDO;

    class conectar{

        private static $driver    = 'mysql';
        private static $host      = '127.0.0.1';
        private static $port      = 3306;
        private static $usuario   = 'username';
        private static $senha     = 'password';
        private static $database  = 'database';

        protected static $conexao = null;

        public function __construct(){
            try{
                self::$conexao = new PDO($this->getDriver() . ":host=" . $this->getHost() . ";port=" . $this->getPort() . ";dbname=" . $this->getDatabase() . ";charset=utf8", $this->getUsuario(), $this->getSenha());
            }catch(PDOException $erro){
                die("Erro: <pre>" . $erro->getMessage() . "</pre>");
            }
        }

        private function getDriver(){
            return self::$driver;
        }

        private function getHost(){
            return self::$host;
        }

        private function getPort(){
            return self::$port;
        }

        private function getUsuario(){
            return self::$usuario;
        }

        private function getSenha(){
            return self::$senha;
        }

        private function getDatabase(){
            return self::$database;
        }

    }