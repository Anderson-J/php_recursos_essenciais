<?php

// $nome = "Anderson Oliveira";

// var_dump($nome[16]);
// $nome[16] = "A";

// var_dump($nome);

// // echo "<h1 style="color: blue;">Anderson Oliveira<?h1>"; // erro

// echo '<h1 style="color: blue;">Anderson Oliveira<?h1>';
// echo "<h1 style='color: blue;'>Anderson Oliveira<?h1>";
// echo "<h1 style=\"color: blue;\">Anderson Oliveira<?h1>";
// echo "<br>";
// echo "<br>";
// echo "Eu tenho R\$mil reais";
// echo "<br>";
// echo "\\192.168.10.10\minha-pasta\\";

$nome = "Anderson";
$saudacao = "Seja bem vindo.";

//Heardoc
// $conteudo = <<<HTML
//     <h1 style="color: blue;">Olá $nome!</h1>
//     <p style="color: red">$saudacao</p>
// HTML;

//Nowdoc
$conteudo = <<<'HTML'
    <h1 style="color: blue;">Olá Anderson!</h1>
    <p style="color: red">Seja bem vindo.</p>
HTML;


echo $conteudo;