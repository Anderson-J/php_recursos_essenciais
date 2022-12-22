<?php

$email = "anderson@email.com.br";

if (preg_match("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $email) === 1) {
    echo "valido";
} else {
    echo "invalido";
}

$emails = ["anderson@email.com.br", "anderson", "anderson@teste", "andersonoliveira@email.com"];

$validos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $emails);

$invalidos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $emails, PREG_GREP_INVERT);

var_dump($validos);