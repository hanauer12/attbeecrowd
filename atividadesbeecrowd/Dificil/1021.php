<?php
$valor = readline("Valor = ");

$notas_moedas = array(100, 50, 20, 10, 5, 2, 1, 0.50, 0.25, 0.10, 0.05, 0.01);
$qtd_notas_moedas = array();

foreach ($notas_moedas as $nota_moeda) {
    if ($nota_moeda > 0) { 
        $qtd = intval($valor / $nota_moeda);
        $valor = round($valor - $qtd * $nota_moeda, 2);
        $qtd_notas_moedas[$nota_moeda] = $qtd;
    }
}

echo "Notas e moedas necessárias:" . PHP_EOL;
foreach ($qtd_notas_moedas as $nota_moeda => $qtd) {
    echo number_format($nota_moeda, 2) . ": $qtd" . PHP_EOL;
}
?>
