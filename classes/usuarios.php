<?php

    namespace sistema\modulos;

    use \sistema\operacoes;

    require_once("operacoes.php");

    class usuarios extends operacoes{

        public function getUsuarios(){
            $sql = "SELECT * FROM usuarios";
            return $this->selecionar($sql);
        }

        public function getUsuario($id){
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $par = array(":id" => $id);
            return $this->selecionar($sql, $par);
        }
        
    }
    