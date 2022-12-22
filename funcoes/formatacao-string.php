<?php

// echo ("Anderson<br>");

// echo "Anderson ", "Oliveira<br>";

$nome = "Anderson";
$sobrenome = "Oliveira";
$idade = 32;

// echo 'Nome ', $nome, ' e sobrenome ', $sobrenome;
// echo "<br>";
// echo 'Nome '. $nome . ' e sobrenome ' . $sobrenome;
// echo "<br>";
// echo "Nome $nome e sobrenome $sobrenome";

// $resultado = 'Nome '. $nome . ' e sobrenome ' . $sobrenome;

// echo "<br>";
// echo $resultado;

// $resultado = sprintf("Nome %s sobrenome %s e tenho %d anos", $nome, $sobrenome, $idade);
// echo $resultado;

// printf("Nome %s sobrenome %s e tenho %d anos", $nome, $sobrenome, $idade);

$entrada = ['Anderson', 'Oliveira', 32];

$resultado = vsprintf("Nome %s sobrenome %s e tenho %d anos", $entrada);

echo $resultado;