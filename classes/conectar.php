<?php

    namespace sistema;

    use \PDO;

    class conectar{

        private static $driver    = 'mysql';
        private static $host      = '10.2.0.3';
        private static $port      = 3306;
        private static $usuario   = 'gestor';
        private static $senha     = '071006';
        private static $database  = 'gestor_data';

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