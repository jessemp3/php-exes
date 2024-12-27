<?php
    $peca1 = 1;
    $valor1 = 4.00;
    $quantidade1 = 2;

    $peca2 = 2;
    $valor2 = 4.50;
    $quantidade2 = 3;

    $calculo = ($valor1 * $quantidade1) + ($valor2 * $quantidade2);
    $total = $calculo/100 + 1;

    echo "VALOR A SER ACRESCIDO: R$ " . number_format($total, 2, '.', '');