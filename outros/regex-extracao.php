<?php

$aniversarios = "Anderson 20/01 Fernanda Rodolfo 24/01 Liana 16/05 Livia 26/04 Lohan 26/06";

$datas = preg_split('/[a-z]+\s/i', $aniversarios, -1, PREG_SPLIT_NO_EMPTY);

var_dump($datas);

$endereco = "Av Paulista, 100 - Sao Paulo/SP";

preg_match('/([a-zA-Z_\s]+),\s([0-9]+)\s-\s([a-zA-Z\s]+)\/([A-Z]{2})/', $endereco, $partes);

var_dump($partes);
