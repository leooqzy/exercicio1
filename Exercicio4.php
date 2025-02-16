<?php
    
    function multiplicarPorB($vetor, $B) {
        $resultado = array();
        
        foreach ($vetor as $numero) {
            $resultado[] = $numero * $B;
        }
        
        return $resultado;
    }

    $A = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $B = readline("Digite o valor de B para multiplicação: ");
    
    $C = multiplicarPorB($A, $B);
    
    echo "Vetor resultante após multiplicação por $B: ";
    foreach ($C as $valor) {
        echo $valor . " ";
    }
?>
