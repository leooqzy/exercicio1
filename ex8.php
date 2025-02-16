<?php

    $totalEstoque = 0;
    $quantidadeItens = 0;

    while (true) {
        echo "\nDigite o valor da mercadoria (0 para terminar): R$ ";
        $valor = (float)readline();
        
        if ($valor == 0) {
            break;
        }
        
        $totalEstoque += $valor;
        $quantidadeItens++;
    }

    echo "\nRelatório do Estoque:\n";
    echo "Total de mercadorias: {$quantidadeItens}\n";
    echo "Valor total em estoque: R$ " . number_format($totalEstoque, 2, ',', '.') . "\n";

    if ($quantidadeItens > 0) {
        $mediaValor = $totalEstoque / $quantidadeItens;
        echo "Média de valor por mercadoria: R$ " . number_format($mediaValor, 2, ',', '.') . "\n";
    }
    
?>
