<?php
    
    function calcularMediaTurma($notas) {
        $soma = 0;
        $contador = 0;
        
        foreach ($notas as $nota) {
            if ($nota >= 0) { 
                $soma += $nota;
                $contador++;
            }
        }
        
        if ($contador > 0) {
            return $soma / $contador;
        } else {
            return "Nenhuma nota válida encontrada";
        }
    }

    $notas = array();
    $nota = 0;
    
    echo "Digite as notas (digite um número negativo para encerrar):\n";
    while (true) {
        $nota = readline("Digite uma nota: ");
        if ($nota < 0) {
            break;
        }
        $notas[] = $nota;
    }
    
    $media = calcularMediaTurma($notas);
    echo "Média da turma: " . $media;
?>
