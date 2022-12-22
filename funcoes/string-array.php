<?php

$cursos = explode(", ", "PHP, C#, JAVA, FLUTTER"); // aceita um terceiro parametro que delimita o array

var_dump($cursos);

$cursosString = implode(" - ", $cursos);

var_dump($cursosString);