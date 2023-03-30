<?php

$valores = readline("Valores = ");


$arrayValores = explode(" ", $valores);

$a =  $arrayValores[0];
$b = $arrayValores[1];
$c = $arrayValores[2];

$triangulo = ($a * $c)/2;
$circulo =  3.14159 * pow($c,2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = pow($b,2);
$areatriangulo = $a * $b;



echo "TRIANGULO: " . number_format($triangulo, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($circulo, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($trapezio, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($quadrado, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($areatriangulo, 3, '.', '') . "\n";

?>
