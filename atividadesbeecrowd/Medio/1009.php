<?php

// ler nome do vendedor, salário fixo e total de vendas
$nome = readline();
$salarioFixo = floatval(readline());
$totalVendas = floatval(readline());

// calcular comissão
$comissao = $totalVendas * 0.15;

// calcular o total a receber
$totalReceber = $salarioFixo + $comissao;

// imprimir resultado com duas casas decimais
printf("TOTAL = R$ %.2f\n", $totalReceber);

?>
