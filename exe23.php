<?php


$num1 = 2003;
$num2 = 2;
$num3 = 400;
$num4 = 200;
$num5 = 200;
$num6 = 200;
$num7 = 200;
$num8 = 200;
$num9 = 200;
$num10 = 200;
$num11 = 2003;
$num12 = 2;
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

$maiorQ0_100 = 0;
$maiorQ100_200 = 0;
$maiores = 0;
for($i = 0; $i < count($total); $i++){
    if($total[$i] > 0 && $total[$i] < 100){
        $maiorQ0_100++;
    }else if($total[$i] > 100 && $total[$i] <= 200){
        $maiorQ100_200++;
    }else{
//        echo "maiores que 200";
        $maiores++;
    }
}

echo "Total: $maiorQ0_100 <br>";
echo "Total: $maiorQ100_200 <br>";
echo "Total: $maiores <br>";