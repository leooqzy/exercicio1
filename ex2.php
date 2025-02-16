<?php

    $soma = 0;

    echo "Digite 10 valores inteiros:\n";

    for ($i = 1; $i <= 10; $i++) {
        echo "Digite o {$i}º valor: ";
        $valor = (int)readline();
        $soma += $valor;
    }

    $media = $soma / 10;

    echo "\nSomatória: {$soma}\n";
    echo "Média: {$media}\n";
    
?>
