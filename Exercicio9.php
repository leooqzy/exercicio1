<?php
    
    function verificaNome($nomes, $busca) {
        foreach ($nomes as $nome) {
            if (strtolower($nome) == strtolower($busca)) {
                return "ACHEI";
            }
        }
        return "NÃO ACHEI";
    }

    $nomes = array();
    for ($i = 0; $i < 10; $i++) {
        $nomes[] = readline("Digite o " . ($i + 1) . "º nome: ");
    }

    $busca = readline("\nDigite um nome para buscar: ");
    echo verificaNome($nomes, $busca);
?>
