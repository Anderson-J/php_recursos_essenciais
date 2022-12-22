<?php

$nota1 = 4;

if ($nota > 5) {
    $resultado = "Aprovado";
} else {
    $resultado = "Reprovado";
}

echo $resultado;
echo "<br>";

$nota2 = 8;
$resultado = $nota2 > 5 ? "Aprovado" : "Reprovado";

echo $resultado;
echo "<br>";

$nota3 = 9;
$resultado = $nota3 > 5 ? ($nota3 >= 9 ? "Muito Bem! Aprovado" : "Reprovado") : "Reprovado"; 

echo $resultado;