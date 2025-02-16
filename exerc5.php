<?php

    $anoNascimento = readline("Digite o ano de nascimento: ");
    $anoAtual = 2025;

    $idade = $anoAtual - $anoNascimento;

    echo "Sua idade é: " . $idade . " anos\n";

    if ($idade >= 18) {
        echo "Você já pode votar e tirar a Carteira de Habilitação\n";
    } elseif ($idade >= 16) {
        echo "Você já pode votar, mas ainda não pode tirar a Carteira de Habilitação\n";
    } else {
        echo "Você ainda não pode votar nem tirar a Carteira de Habilitação\n";
    }

?>
