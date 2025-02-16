<?php
    
    function criaArrayMultiplosDe5($quantidade) {
        $array = array();
        $numero = 5;
        
        for ($i = 0; $i < $quantidade; $i++) {
            $array[] = $numero;
            $numero += 5;
        }
        
        return $array;
    }

    $quantidade = readline("Digite a quantidade de números desejada: ");
    $resultado = criaArrayMultiplosDe5($quantidade);
    
    echo "Array de múltiplos de 5: ";
    foreach ($resultado as $valor) {
        echo $valor . " ";
    }
?>
