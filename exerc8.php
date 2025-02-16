<?php

    $preco = readline("Digite o preço da etiqueta: ");
    $codigo = readline("Digite o código de pagamento (1 a 4): ");

    if ($codigo == 1) {
        $desconto = $preco * 0.10;
        $total = $preco - $desconto;
        echo "Forma de pagamento: À vista em dinheiro com 10% de desconto\n";
        echo "Valor final: R$ " . number_format($total, 2, ',', '.') . "\n";
    } 
    elseif ($codigo == 2) {
        $desconto = $preco * 0.05;
        $total = $preco - $desconto;
        echo "Forma de pagamento: À vista no cartão com 5% de desconto\n";
        echo "Valor final: R$ " . number_format($total, 2, ',', '.') . "\n";
    }
    elseif ($codigo == 3) {
        $parcela = $preco / 2;
        echo "Forma de pagamento: Em 2 vezes, preço normal da etiqueta\n";
        echo "Valor final: R$ " . number_format($preco, 2, ',', '.') . "\n";
        echo "Valor das parcelas: 2x de R$ " . number_format($parcela, 2, ',', '.') . "\n";
    }
    elseif ($codigo == 4) {
        $total = $preco * 1.10;
        $parcela = $total / 3;
        echo "Forma de pagamento: Em 3 vezes, preço normal da etiqueta com juros de 10%\n";
        echo "Valor final: R$ " . number_format($total, 2, ',', '.') . "\n";
        echo "Valor das parcelas: 3x de R$ " . number_format($parcela, 2, ',', '.') . "\n";
    }
    else {
        echo "Código de pagamento inválido\n";
    }

?>
