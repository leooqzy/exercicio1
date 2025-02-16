<?php

    function somaDivisiveis($a, $b, $c) {
        $soma = 0;
        for ($i = $b; $i <= $c; $i++) {
            if ($i % $a == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }

    $a = readline("Digite a: ");
    $b = readline("Digite b: ");
    $c = readline("Digite c: ");
    echo somaDivisiveis($a, $b, $c);
    
?>
