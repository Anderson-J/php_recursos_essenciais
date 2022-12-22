<?php

var_dump(abs(-6)); // 6
var_dump(abs(6)); // 6

var_dump(round(12.4)); // 12
var_dump(round(12.5)); // 13
var_dump(round(12.6)); // 13
var_dump(round(12.6189, 2)); // Serão levados em conta os dois números após o ponto e o terceiro número (1) será arredondando

var_dump(ceil(14.1)); // 15
var_dump(floor(14.1)); // 14

var_dump(mt_rand(1, 60)); // Dar preferência em usar essa função caso precise gerar números randomicos, nesse caso em espscífico será gerado um número aleatório entre 1 e 60

var_dump(pow(3, 2));
var_dump(3 ** 2);

var_dump(sqrt(9));
var_dump(sqrt(10));