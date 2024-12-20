<?php
    $age = 65;

    if($age < 16){
        echo 'Seu voto não é obrigatorio';
    }else if($age >= 16 && $age < 18 || $age >= 65) {
        echo 'Seu voto é opcional';
    }else if($age >= 18 && $age < 65) {
        echo 'Seu voto é obrigatorio';
    }else{
        echo 'Idade invalida';
    }
?>