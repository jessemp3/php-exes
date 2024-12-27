<?php

    $vendedor = 'jesse';
    $salario = 1000;
    $vendas = 900;

    $comisao = $vendas * 0.15;

    $salarioFinal = $salario + $comisao;

    echo "O vendedor $vendedor recebeu um salário de R$ $salario e uma comissão de R$ $comisao, totalizando R$ $salarioFinal";