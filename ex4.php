<?php

    $soma = 0;
    $quantidade = 0;

    for ($i = 50; $i <= 70; $i++) {
        if ($i % 2 == 0) {
            $soma += $i;
            $quantidade++;
        }
    }

    $media = $soma / $quantidade;

    echo "Soma dos valores pares entre 50 e 70: {$soma}\n";
    echo "Média dos valores pares entre 50 e 70: {$media}\n";
    
?>
