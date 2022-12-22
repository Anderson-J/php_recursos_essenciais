<?php

$valor = 1879.85;
$valor += 10;

$real = "R$ " . number_format($valor, 2, ',', '.');
// $real += 10; // Erro;

var_dump($real);