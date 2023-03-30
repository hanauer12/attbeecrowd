<?php 
$tempogasto = readline("Tempo Gasto = ");
$velocidade = readline("Velocidade Media = ");



$distancia_percorrida = $velocidade * $tempogasto;
$quantidade_combustivel = $distancia_percorrida / 12; 


echo "Quantidade de combustível necessária: " . number_format($quantidade_combustivel, 3) . " litros" . PHP_EOL;
?>
