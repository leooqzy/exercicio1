<?php

    // Exercício 3 - Maior número do array

    function encontraMaior($array) {
        $maior = $array[0];
        foreach ($array as $n) {
            if ($n > $maior) {
                $maior = $n;
            }
        }
        return $maior;
    }

    $numeros = array(15, 7, 23, 9, 14, 77, 38);
    echo encontraMaior($numeros);
    
?>
