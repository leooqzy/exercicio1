<?php

    $dividendo = readline("Digite o dividendo: ");
    $divisor = readline("Digite o divisor");

    $resq = $dividendo / $divisor;
    
    $resto = $dividendo % $divisor;

    echo "O resultado da divisão é de: $resq <br>";
    echo "Sobrou: $resto";

?>