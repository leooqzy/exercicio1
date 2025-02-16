<?php
    
    function cadastrarPessoa() {
        $pessoa = array();
        $pessoa['nome'] = readline("Nome: ");
        $pessoa['cidade'] = readline("Cidade: ");
        $pessoa['idade'] = readline("Idade: ");
        $pessoa['sexo'] = strtoupper(readline("Sexo (M/F): "));
        return $pessoa;
    }

    function listarTodos($cadastros) {
        echo "\nTodos os nomes e cidades:\n";
        foreach ($cadastros as $pessoa) {
            echo $pessoa['nome'] . " - " . $pessoa['cidade'] . "\n";
        }
    }

    function listarGuarapuava($cadastros) {
        echo "\nPessoas que moram em Guarapuava:\n";
        foreach ($cadastros as $pessoa) {
            if (strtolower($pessoa['cidade']) == 'guarapuava') {
                echo $pessoa['nome'] . "\n";
            }
        }
    }

    function listarMaisDe18($cadastros) {
        echo "\nPessoas com mais de 18 anos:\n";
        foreach ($cadastros as $pessoa) {
            if ($pessoa['idade'] > 18) {
                echo $pessoa['nome'] . "\n";
            }
        }
    }

    function contarMulheres($cadastros) {
        $count = 0;
        foreach ($cadastros as $pessoa) {
            if ($pessoa['sexo'] == 'F') {
                $count++;
            }
        }
        echo "\nQuantidade de pessoas do sexo feminino: $count\n";
    }

    $cadastros = array();
    for ($i = 0; $i < 10; $i++) {
        echo "\nCadastro " . ($i + 1) . ":\n";
        $cadastros[] = cadastrarPessoa();
    }

    listarTodos($cadastros);
    listarGuarapuava($cadastros);
    listarMaisDe18($cadastros);
    contarMulheres($cadastros);
?>
