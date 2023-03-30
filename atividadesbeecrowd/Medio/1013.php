<?php



echo "Digite os três valores separados por espaços: ";
$valores = readline();

$arrayValores = explode(" ", $valores);

$a = (int) $arrayValores[0];
$b = (int) $arrayValores[1];
$c = (int) $arrayValores[2];

function maior($a, $b) {
    return ($a + $b + abs($a - $b)) / 2;
}

$maiorAB = maior($a, $b);

$maiorFinal = maior($maiorAB, $c);
echo $maiorFinal . " eh o maior" . PHP_EOL;

?>
