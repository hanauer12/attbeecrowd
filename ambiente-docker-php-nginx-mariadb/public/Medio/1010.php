<?php
// Lê o código da peça 1, o número de peças 1 e o valor unitário da peça 1 da entrada padrão
$linha1 = readline();
$valores1 = explode(" ", $linha1);
$codigo1 = intval($valores1[0]);
$quantidade1 = intval($valores1[1]);
$valorUnitario1 = floatval($valores1[2]);

// Lê o código da peça 2, o número de peças 2 e o valor unitário da peça 2 da entrada padrão
$linha2 = readline();
$valores2 = explode(" ", $linha2);
$codigo2 = intval($valores2[0]);
$quantidade2 = intval($valores2[1]);
$valorUnitario2 = floatval($valores2[2]);

// Calcula o valor total a ser pago
$total = ($quantidade1 * $valorUnitario1) + ($quantidade2 * $valorUnitario2);

// Imprime o resultado formatado na saída padrão
echo "VALOR A PAGAR: R$ " . number_format($total, 2, '.', '') . "\n";
?>
