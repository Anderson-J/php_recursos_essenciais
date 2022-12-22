<?php

$aniversario = new DateTime('2022-01-20');
$aniversario->setDate(2023, 1, 20);
// $aniversario->setTimestamp(500_000_000);

var_dump($aniversario->getOffset()/ 60 / 60);
var_dump($aniversario->getTimezone());
var_dump($aniversario->getTimestamp());

$aniversario->modify('next Saturday');
$aniversario->setTime(15, 30);

var_dump($aniversario);