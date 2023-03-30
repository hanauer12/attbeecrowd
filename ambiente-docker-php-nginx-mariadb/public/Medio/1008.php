<?php

$nFuncionario = readline("Numero funcionario = ");
$nHorastrabalhadas = readline("Numero de horas trabalhadas = ");
$vHora = readline("Valor por hora trabalhada = ");

$s = $nHorastrabalhadas * $vHora;


echo "NUMBER = " . $nFuncionario .  " \n";
echo "SALARY = U$ " . $s;