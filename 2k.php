<?php

    $a = readline("Digite um número de 3 digitos: \n");

    $arr = str_split($a);

    $arr = array_reverse($arr);

    $inv = implode('', $arr);
    echo "Número invertido = ", $inv , "\n";

?>