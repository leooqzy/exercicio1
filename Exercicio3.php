<?php
    
    function criarVetorPositivos($array) {
        $positivos = array();
        
        foreach ($array as $numero) {
            if ($numero > 0) {
                $positivos[] = $numero;
            }
        }
        
        return $positivos;
    }

    $numeros = array(1, -2, 3, -4, 5, -6, 7, -8, 9, -10);
    $resultado = criarVetorPositivos($numeros);
    
    echo "Números positivos: ";
    foreach ($resultado as $numero) {
        echo $numero . " ";
    }
?>
