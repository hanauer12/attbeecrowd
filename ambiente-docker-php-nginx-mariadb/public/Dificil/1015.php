<?php


$valores1 = readline();
$valores2 = readline();

$arrayValores1 = explode(" ", $valores1);
$x1 =  $arrayValores1[0];
$y1 = $arrayValores1[1];

$arrayValores2 = explode(" ", $valores2);
$x2 =  $arrayValores2[0];
$y2 = $arrayValores2[1];

$distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

echo  number_format($distancia,4,".","."). PHP_EOL;
