<?php
    
    function encontrarDezMenores($numeros) {
        sort($numeros); 
        $dezMenores = array_slice($numeros, 0, 10); 
        return $dezMenores;
    }

    
    $numeros = array();
    for ($i = 0; $i < 50; $i++) {
        $numeros[] = readline("Digite o " . ($i + 1) . "º número: ");
    }
    
    $menores = encontrarDezMenores($numeros);
    
    echo "Os 10 menores números são: ";
    foreach ($menores as $numero) {
        echo $numero . " ";
    }
?>
