<?php

echo 'Digite o nome e a idade: ' . PHP_EOL;
$age1 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade: ' . PHP_EOL;
$age2 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:: ' . PHP_EOL;
$age3 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:' . PHP_EOL;
$age4 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:' . PHP_EOL;
$age5 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:' . PHP_EOL;
$age6 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:' . PHP_EOL;
$age7 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:' . PHP_EOL;
$age8 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:'. PHP_EOL;
$age9 = (int) trim(fgets(STDIN));
echo 'Digite o nome e a idade:' . PHP_EOL;
$age10 = (int) trim(fgets(STDIN));

$allAges = [
    $age1,
    $age2,
    $age3,
    $age4,
    $age5,
    $age6,
    $age7,
    $age8,
    $age9,
    $age10
];

$minValor = min($allAges); //   min() é uma função nativa do PHP que retorna o menor valor de um array

echo 'A menor idade é: ' . $minValor . PHP_EOL;