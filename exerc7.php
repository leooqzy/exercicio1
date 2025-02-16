<?php

    $idade = readline("Digite a idade do nadador: ");

    if ($idade >= 5 && $idade <= 7) {
        echo "Categoria: Infantil A\n";
    } elseif ($idade >= 8 && $idade <= 10) {
        echo "Categoria: Infantil B\n";
    } elseif ($idade >= 11 && $idade <= 13) {
        echo "Categoria: Juvenil A\n";
    } elseif ($idade >= 14 && $idade <= 17) {
        echo "Categoria: Juvenil B\n";
    } elseif ($idade >= 18) {
        echo "Categoria: Sênior\n";
    } else {
        echo "Idade não se enquadra em nenhuma categoria\n";
    }

?>
