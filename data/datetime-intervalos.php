<?php

$rodolfo = new DateTime('2022-01-24');
$anderson = new DateTime('2022-01-20');

$intervalo = $rodolfo->diff($anderson);

var_dump($intervalo->format('%d dias'));

$anderson->add(new DateInterval(('P2Y')));

var_dump($anderson);

$anderson->sub(new DateInterval("P4D"));

var_dump($anderson);