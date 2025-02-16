<?php

    function somaEntre($inicio, $fim) {
        $soma = 0;
        for ($i = $inicio + 1; $i < $fim; $i++) {
            $soma += $i;
        }
        return $soma;
    }

    $n1 = readline("Primeiro número: ");
    $n2 = readline("Segundo número: ");
    echo somaEntre($n1, $n2);
    
?>
