<?php

    $horas = readline("informe que horas são agora de 0 a 23: \n");
    $minutos = readline("Informe os minutos de 0 a 59: \n");

    $totalminutos = ($horas * 60) + $minutos;

    echo "Passou $totalminutos minutos desde o horario \n";


?>