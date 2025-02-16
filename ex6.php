<?php

    function lerNota($mensagem) {
        do {
            echo $mensagem;
            $nota = (float)readline();
            if ($nota < 0 || $nota > 10) {
                echo "Nota inválida! Digite um valor entre 0 e 10.\n";
            }
        } while ($nota < 0 || $nota > 10);
        return $nota;
    }

    do {
        $nota1 = lerNota("Digite a primeira nota (0-10): ");
        $nota2 = lerNota("Digite a segunda nota (0-10): ");
        
        $media = ($nota1 + $nota2) / 2;
        echo "\nMédia: {$media}\n";
        
        do {
            echo "\nNOVO CÁLCULO (S/N)? ";
            $resposta = strtoupper(readline());
        } while ($resposta != 'S' && $resposta != 'N');
        
    } while ($resposta == 'S');
    
?>
