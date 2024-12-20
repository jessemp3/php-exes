<?php
    $saldo = 4000;

    if($saldo > 0 && $saldo <= 500){
        echo "nenhum Credito";
    }else if($saldo > 500 && $saldo <= 1000){
        $saldo += ($saldo * 30) / 100;
        echo "Crédito de 30% do saldo médio " . $saldo;
    }else if($saldo > 1000 && $saldo <= 3000) {
        $saldo += ($saldo *  40) / 100;
        echo "Crédito de 40% do saldo médio " . $saldo;
    }else if($saldo > 3000) {
        $saldo += ($saldo * 50) / 100;
        echo "Crédito de 50% do saldo médio " . $saldo;
    }else{
        echo "Saldo inválido";
    }

?>