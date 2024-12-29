<?php

echo 'Digite o valor em real para conversão: ';
$real = trim(fgets(STDIN));

$valorDolar = 6.19;

$conversao = number_format($real / $valorDolar , 2 , '.' , '');
echo 'O valor em dolar é: ' . $conversao . PHP_EOL;