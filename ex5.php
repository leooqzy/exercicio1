<?php

    $maior = null;
    $menor = null;
    $primeiro = true;

    echo "Digite valores inteiros (0 para terminar):\n";

    while (true) {
        echo "Digite um valor: ";
        $valor = (int)readline();
        
        if ($valor == 0) {
            break;
        }
        
        if ($primeiro) {
            $maior = $valor;
            $menor = $valor;
            $primeiro = false;
        } else {
            if ($valor > $maior) {
                $maior = $valor;
            }
            if ($valor < $menor) {
                $menor = $valor;
            }
        }
    }

    if (!$primeiro) {
        echo "\nMaior valor: {$maior}\n";
        echo "Menor valor: {$menor}\n";
    } else {
        echo "\nNenhum valor foi digitado.\n";
    }
    
?>
