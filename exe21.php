<?php

    declare(strict_types=1);

    $valorProduto= 0;

    echo 'Digite o valor do produto: ';
    $valorProduto = (int)trim(fgets(STDIN));

    $valorParcelado = $valorProduto / 5;
    echo 'O valor do produto parcelado em 5x é de: ' . $valorParcelado . PHP_EOL;
