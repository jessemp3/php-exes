<?php

declare(strict_types=1);

echo 'Digite a idade de 20 pessoas: ' . PHP_EOL;
echo 'Digite a idade da primeira pessoa: ' . PHP_EOL;
$age1 = (int) trim(fgets(STDIN));
echo 'Digite a idade da segunda pessoa: ' . PHP_EOL;
$age2 = (int) trim(fgets(STDIN));
echo 'Digite a idade da terceira pessoa: ' . PHP_EOL;
$age3 = (int) trim(fgets(STDIN));
echo 'Digite a idade da quarta pessoa: ' . PHP_EOL;
$age4 = (int) trim(fgets(STDIN));
echo 'Digite a idade da quinta pessoa: ' . PHP_EOL;
$age5 = (int) trim(fgets(STDIN));
echo 'Digite a idade da sexta pessoa: ' . PHP_EOL;
$age6 = (int) trim(fgets(STDIN));
echo 'Digite a idade da sétima pessoa: ' . PHP_EOL;
$age7 = (int) trim(fgets(STDIN));
echo 'Digite a idade da oitava pessoa: ' . PHP_EOL;
$age8 = (int) trim(fgets(STDIN));
echo 'Digite a idade da nona pessoa: ' . PHP_EOL;
$age9 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima pessoa: ' . PHP_EOL;
$age10 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima primeira pessoa: ' . PHP_EOL;
$age11 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima segunda pessoa: ' . PHP_EOL;
$age12 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima terceira pessoa: ' . PHP_EOL;
$age13 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima quarta pessoa: ' . PHP_EOL;
$age14 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima quinta pessoa: ' . PHP_EOL;
$age15 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima sexta pessoa: ' . PHP_EOL;
$age16 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima sétima pessoa: ' . PHP_EOL;
$age17 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima oitava pessoa: ' . PHP_EOL;
$age18 = (int) trim(fgets(STDIN));
echo 'Digite a idade da décima nona pessoa: ' . PHP_EOL;
$age19 = (int) trim(fgets(STDIN));
echo 'Digite a idade da vigésima pessoa: ' . PHP_EOL;
$age20 = (int) trim(fgets(STDIN));

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
    $age10,
    $age11,
    $age12,
    $age13,
    $age14,
    $age15,
    $age16,
    $age17,
    $age18,
    $age19,
    $age20
  ];

for($i = 0; $i < count($allAges); $i++){
    if($allAges[$i] >= 18){
        echo "Idade: $allAges[$i] é maior que 18 anos" . PHP_EOL;
    }
}
