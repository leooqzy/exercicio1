<?php

    $valor1 = readline("Digite o primeiro valor: ");
    $valor2 = readline("Digite o segundo valor: ");

    if ($valor1 == $valor2) {
        echo "Por favor, digite valores diferentes\n";
    } else {
        if ($valor1 > $valor2) {
            $maior = $valor1;
        } else {
            $maior = $valor2;
        }
        echo "O maior valor é: " . $maior . "\n";
    }

?>
