<?php

    namespace sistema;

    use \PDO;

    require_once("conectar.php");

    class operacoes extends conectar{

        protected function selecionar($query, $params = null){
            $res = null;
            $con = parent::$conexao;
            $inst = $con->prepare($query);
            $inst->execute($params);
            if ($inst->rowCount()) {
                $res = $inst->fetchAll(PDO::FETCH_ASSOC) or die(print_r($inst->errorInfo()));
            }
            return $res;
        }

        protected function excluir($query, $params = null){
            $res = false;
            $con = parent::$conexao;
            $inst = $con->prepare($query);
            $inst->execute($params);
            if ($inst->rowCount()) {
                $res = true;
            }
            return $res;
        }

        protected function inserir($query, $params = null){
            $res = null;
            $con = parent::$conexao;
            $inst = $con->prepare($query);
            $inst->execute($params);
            if ($inst->rowCount()) {
                $res = $inst->lastInsertId() or die(print_r($inst->errorInfo()));
            }
            return $res;
        }

        protected function alterar($query, $params = null){
            $res = false;
            $con = parent::$conexao;
            $inst = $con->prepare($query);
            $inst->execute($params);
            if ($inst->rowCount()) {
                $res = true;
            }
            return $res;
        }

    }