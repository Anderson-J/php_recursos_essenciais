<?php

$aniversarios = "Anderson 20/01 Fernanda Rodolfo 24/01 Liana 16/05 Livia 26/04 Lohan 26/06";
$aniversarios2 = "Anderson 20/01 Fernanda Rodolfo 24/01 Liana 16/05 Livia 26/04 Lohan 26/06";

$nomes = preg_replace('/[0-9\/]+/', "", $aniversarios);

var_dump($nomes);

$nomes2 = preg_replace(['/[a-z]+/i',
    '/[0-9\/]+/'],
    ['#', '*'],
    $aniversarios,
    1,
    $contador
);

var_dump($nomes2, $contador);

$formatado = preg_replace_callback(
    '/[0-9]+/',
    'tratar',
    $aniversarios2
);

function tratar(array $item): string {
    return DateTime::createFromFormat('Y-m-d', $item[0]->format('d/m/Y'));
}

var_dump($formatado);