<?php
    
    function criarListaMesas($nomes) {
        $mesas = array();
        
        for ($i = 0; $i < count($nomes); $i++) {
            $numeroMesa = $i + 1;
            $mesas[$numeroMesa] = $nomes[$i];
        }
        
        return $mesas;
    }

    $nomes = array();
    for ($i = 0; $i < 10; $i++) {
        $nomes[] = readline("Digite o nome para a mesa " . ($i + 1) . ": ");
    }
    
    $mesas = criarListaMesas($nomes);
    
    echo "\nLista de mesas:\n";
    foreach ($mesas as $mesa => $nome) {
        echo "Mesa $mesa: $nome\n";
    }
?>
