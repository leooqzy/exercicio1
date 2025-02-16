<?php

    $nota1 = readline("Digite a nota da 1ª avaliação: ");
    $nota2 = readline("Digite a nota da 2ª avaliação: ");

    $media = ($nota1 + $nota2) / 2;

    echo "Média calculada: " . number_format($media, 1, ',', '.') . "\n";

    if ($media >= 6) {
        echo "Situação: APROVADO\n";
    } else {
        echo "Situação: REPROVADO\n";
    }

?>
