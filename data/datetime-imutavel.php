<?php

$aniversarioAnderson = new DateTimeImmutable("2022-01-20");

var_dump($aniversarioAnderson);

$aniversarioAndersonAnoQueVem =  $aniversarioAnderson->add(new DateInterval('P1Y'));

var_dump($aniversarioAnderson, $aniversarioAndersonAnoQueVem);
