<?php

// decbin($decimal) <> bindec($binario)
// decoct($decimal) <> octdec($octal)
// dechex($decimal) <> hexdec($hexdecimal)

$dec = 980;
$bin = 0b1111010100;
$oct = 01724;
$hex = 0x3d4;

var_dump($dec, $bin, $oct, $hex);

$int = PHP_INT_MAX;

var_dump($int);

var_dump($int + 1); // conversão para float em notação cientifica