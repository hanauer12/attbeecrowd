<?php

$valores = readline("Valores = ");


$arrayValores = explode(" ", $valores);

$a = (int) $arrayValores[0];
$b = (int) $arrayValores[1];
$c = (int) $arrayValores[2];

$triangulo = ($a * $c)/2;

echo number_format($triangulo,3,".",".");


