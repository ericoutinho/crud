<?php

    namespace sistema\modulos;

    require_once("operacoes.php");

    use \sistema\operacoes;

    class autorizacoes extends operacoes{

        public function login($user, $pass){
            $u = filter_var($user, FILTER_SANITIZE_STRING);
            $p = $this->rash($pass);
            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
            $param = array(':email' => $u, ':senha' => $p);
            $match = $this->selecionar($sql, $param);
            if ($match) {
                return true;
            }
        }

        private function rash($pass) {
            return sha1(md5($pass));
        }

    }