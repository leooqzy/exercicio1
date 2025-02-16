<?php

    $soma = 0;
    $quantidade = 0;

    echo "Digite valores inteiros (0 para terminar):\n";

    while (true) {
        echo "Digite um valor: ";
        $valor = (int)readline();
        
        if ($valor == 0) {
            break;
        }
        
        $soma += $valor;
        $quantidade++;
    }

    if ($quantidade > 0) {
        $media = $soma / $quantidade;
        echo "\nQuantidade de valores: {$quantidade}\n";
        echo "Somatória: {$soma}\n";
        echo "Média: {$media}\n";
    } else {
        echo "\nNenhum valor foi digitado.\n";
    }
    
?>
