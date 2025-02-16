<?php

    function verificaPar($numero) {
        return $numero % 2 == 0;
    }

    $num = readline("Digite um número: ");
    echo verificaPar($num) ? "true" : "false";
    
?>
