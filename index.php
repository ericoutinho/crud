<?php

    require_once("classes/autorizacoes.php");
    use \sistema\modulos\autorizacoes;

    $x = new autorizacoes;
    if ($x->login('ericoutinho@gmail.com','12345')) {
        echo "Ok";
    }