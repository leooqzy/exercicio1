<?php

    $sf = readline("Digite o valor do salario fixo: ");
    $comissao = readline("Valor da comissão: ");
    $carrosv = readline("QUantos carros foram vendidos: ");
    $vendas = $comissao * $carrosv;
    $totalv = $sf + $vendas;
    $porc = $totalv * 0.05;
    $salariofinal = $totalv + $porc;

    echo "O salario total foi de : $salariofinal";


?>