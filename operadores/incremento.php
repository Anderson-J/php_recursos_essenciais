<?php

declare(strict_types = 1);

$inteiro = 10;

$inteiro = $inteiro + 1;
$inteiro++;

$inteiro = $inteiro - 1;
$inteiro--;

$a = 0;

while ($a <= 10) {
    echo "$a<br>";
    $a++;
}


$numero = 100;
var_dump(++$numero);
var_dump($numero++);


$num = 100;
var_dump(++$num);
var_dump($num++);