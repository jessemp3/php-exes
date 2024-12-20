<?php

$a = 5;
$b = 7;
$c = 3;

if($a > $b && $a > $c){
    echo "O maior número é o A: $a";
}else if($b > $a && $b > $c){
    echo "O maior número é o B: $b";
}else if($c > $a && $c > $b){
    echo "O maior número é o C: $c";
}else{
    echo "Os números são iguais";
}

?>