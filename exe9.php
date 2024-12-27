<?php

    $salarioMin = 1416.00;

    $salarioRecebido = $salarioMin * 2;

    if($salarioRecebido == $salarioMin) {
        echo "Salário igual ao mínimo, recebe um salário mínimo";
    }else if($salarioRecebido > $salarioMin) {
        echo "Salário maior que o mínimo";
    }else if ($salarioRecebido < $salarioMin) {
        echo "Salário menor que o mínimo";
    }else if($salarioRecebido == ($salarioMin * 2)) {
        echo "Salário maior que o dobro do mínimo : recebe dois salários mínimos";
    }