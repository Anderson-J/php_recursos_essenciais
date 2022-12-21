<?php

$valor = [
    'php' => 7.4,
    'dart' => 2,
    // 'c#' => 9
];

if (isset($valor['c#'])) {
    echo $valor['c#'];
} else {
    echo "Não existe curso de C#";
}