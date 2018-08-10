<?php

    require_once("classes/autorizacoes.php");
    use \sistema\modulos\autorizacoes;

    $x = new autorizacoes;
    if ($x->login('email@email.com','12345')) {
        echo "Conectado!";
    }