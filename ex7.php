<?php

    $negativos = 0;

    echo "Digite 10 valores:\n";

    for ($i = 1; $i <= 10; $i++) {
        echo "Digite o {$i}º valor: ";
        $valor = (int)readline();
        
        if ($valor < 0) {
            $negativos++;
        }
    }

    echo "\nQuantidade de valores negativos: {$negativos}\n";
    
?>
