<?php

    $quantidade = readline("Digite a quantidade de maçãs: ");

    if ($quantidade >= 12) {
        $preco = 1.00;
    } else {
        $preco = 1.30;
    }

    $total = $quantidade * $preco;

    echo "Quantidade de maçãs: " . $quantidade . "\n";
    echo "Preço por maçã: R$ " . number_format($preco, 2, ',', '.') . "\n";
    echo "Total a pagar: R$ " . number_format($total, 2, ',', '.') . "\n";

?>
