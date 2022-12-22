<?php

$agora = new DateTime;
$ontem = new DateTime("yesterday");

$outraData = new DateTime('2020-08-22');

$novaData = DateTime::createFromFormat("d/m/Y H:i:s", "22/08/2022 00:00:00");

var_dump($ontem, $agora, $outraData->format('d/m/Y'), $novaData);

function iso_para_brasil($data)
{
    $dateTime = new DateTime($data);

    return $dateTime->format("d/m/Y");
}

function brasil_para_iso($data)
{
    $dateTime = DateTime::createFromFormat("d/m/Y", $data);

    return $dateTime->format('Y-m-d');
}

var_dump(iso_para_brasil('2020-08-22'));

var_dump(brasil_para_iso('22/08/2020'));