<?php

    function verificaMultiploDe4($numero) {
        return $numero % 4 == 0;
    }

    $num = readline("Digite um número: ");
    echo verificaMultiploDe4($num) ? "true" : "false";
    
?>
