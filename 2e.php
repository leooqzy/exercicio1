<?php

    $base = readline("Digite a base do seu retângulo ");
    $altura = readline("Digite a altura do retângulo ");
    
    $peri = $base + $base + $altura + $altura;
    $area = $base * $altura;
    $diag = ($base * $base) + ($altura * $altura);
    $raizq = sqrt($diag);

    echo " O perimetro : $peri \n A area : $area \n A diagonal: $raizq\n";

?>