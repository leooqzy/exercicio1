<?php


    $sa = 1518;
    $qw = 2.168;

    $qntgasta = readline("Quanto de quilowatts gasto na sua residência :\n");

    $valort = $qntgasta * $qw;
    $valord = $valort - ($valort * 0.10);

    echo "Valor a ser pago será de: $valort \n com desconto fica $valord \n";


?>