<?php

date_default_timezone_set('America/Sao_Paulo');

$data = date("d/m/Y H:i");
var_dump($data);

var_dump(date('e'), date('P'));
var_dump(time());

$amanha = strtotime("+1 day");
var_dump($amanha);

$dataAleatoria = strtotime("2020-05-06 15:59");

function formataData($data)
{
    $timestamp = strtotime($data);

    return date("d/m/Y", $timestamp);
}

echo formataData($dataAleatoria);