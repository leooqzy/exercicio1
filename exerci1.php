<?php

    function soma($a, $b) {
        return $a + $b;
    }

    function subtracao($a, $b) {
        return $a - $b;
    }

    function multiplicacao($a, $b) {
        return $a * $b;
    }

    function divisao($a, $b) {
        if ($b == 0) {
            return "Erro: divisão por zero";
        }
        return $a / $b;
    }

    echo "1-Soma, 2-Subtração, 3-Multiplicação, 4-Divisão\n";
    $op = readline("Qual operação? ");
    $n1 = readline("Primeiro número: ");
    $n2 = readline("Segundo número: ");

    switch($op) {
        case 1: 
            echo soma($n1, $n2); 
            break;
        case 2: 
            echo subtracao($n1, $n2); 
            break;
        case 3: 
            echo multiplicacao($n1, $n2); 
            break;
        case 4: 
            echo divisao($n1, $n2); 
            break;
        default: 
            echo "Operação inválida";
    }
?>
