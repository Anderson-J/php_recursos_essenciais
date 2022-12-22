<?php

$nome = "Anderson Oliveira";

$posicaoR = strpos($frase, "r");

var_dump($posicaoR);

$trocaSobrenome = str_replace("Oliveira", "Junior", $nome);

$nomeModificado = substr($nome, 8, 3);