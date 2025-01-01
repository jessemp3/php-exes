<?php

$num1 = 1;
$num2 = 1;
$num3 = 1;
$num4 = 1;
$num5 = 1;
$num6 = 1;
$num7 = 1;
$num8 = 1;
$num9 = 1;
$num10 = 1;
$num11 = 1;
$num12 = -2;
$num13 = 400;
$num14 = 200;
$num15 = 200;
$num16 = 200;
$num17 = 200;
$num18 = 200;
$num19 = 200;
$num20 = 200;


$total = [
    $num1,
    $num2,
    $num3,
    $num4,
    $num5,
    $num6,
    $num7,
    $num8,
    $num9,
    $num10,
    $num11,
    $num12,
    $num13,
    $num14,
    $num15,
    $num16,
    $num17,
    $num18,
    $num19,
    $num20
];


$soma = 0;
for($i = 0; $i <= count($total); $i++){
    $soma += $total[$i];
    echo $total[$i] . PHP_EOL . "<br>"; ;
    if($total[$i] < 0){
        echo "Total: ".  $soma . "<br/>";
        exit("Número negativo encontrado: $total[$i]");

    }
}
