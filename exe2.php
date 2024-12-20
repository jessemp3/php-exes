<?php

$numero = 1;

if($numero % 10 == 0){
        echo "O número é divisível por 10";
}else if($numero % 5 == 0){
        echo "O número é divisível por 5";
}else if($numero % 2 == 0) {
    echo "O número é divisível por 2";
}else{
    echo "O número não é divisível por 10, 5 ou 2";
}

?>