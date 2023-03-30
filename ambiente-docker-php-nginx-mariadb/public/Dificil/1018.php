<?php
$valor = readline("Valor = ");

$notas = array(100, 50, 20, 10, 5, 2, 1);
$qtd_notas = array();

foreach ($notas as $nota) {
    $qtd = intval($valor / $nota); 
    $valor %= $nota; 
    $qtd_notas[$nota] = $qtd;
}

foreach ($qtd_notas as $nota => $qtd) {
    echo "Notas de $nota: $qtd" . PHP_EOL;
}
?>
