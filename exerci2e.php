<?php


    function calculaPesoIdeal($altura, $sexo) {
        $sexo = strtoupper($sexo);
        
        if ($sexo == 'M') {
            return 72.7 * $altura - 58;
        }
        if ($sexo == 'F') {
            return 62.1 * $altura - 44.7;
        }
        return "Sexo inválido";
    }

    $altura = readline("Altura (em metros): ");
    $sexo = readline("Sexo (M/F): ");
    echo calculaPesoIdeal($altura, $sexo);
    
?>
