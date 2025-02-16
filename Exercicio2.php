<?php
    
    function contarNumerosArray($array) {
        $positivos = 0;
        $negativos = 0;
        
        foreach ($array as $numero) {
            if ($numero > 0) {
                $positivos++;
            } elseif ($numero < 0) {
                $negativos++;
            }
        }
        
        echo "Quantidade de números positivos: $positivos\n";
        echo "Quantidade de números negativos: $negativos\n";
    }

    $numeros = array(1, -2, 3, -4, 5, -6, 7, -8, 9, -10);
    contarNumerosArray($numeros);
?>
