<?php
    
    function cadastrarPessoa() {
        $pessoa = array();
        $pessoa['nome'] = readline("Nome: ");
        $pessoa['cidade'] = readline("Cidade: ");
        $pessoa['idade'] = readline("Idade: ");
        $pessoa['sexo'] = strtoupper(readline("Sexo (M/F): "));
        return $pessoa;
    }

    function listarPessoasMaisDe18($cadastros) {
        echo "\nPessoas com mais de 18 anos:\n";
        foreach ($cadastros as $pessoa) {
            if ($pessoa['idade'] > 18) {
                echo $pessoa['nome'] . " - " . $pessoa['cidade'] . "\n";
            }
        }
    }

    function listarMulheres($cadastros) {
        echo "\nMulheres cadastradas:\n";
        foreach ($cadastros as $pessoa) {
            if ($pessoa['sexo'] == 'F') {
                echo $pessoa['nome'] . " - " . $pessoa['cidade'] . "\n";
            }
        }
    }

    $cadastros = array();
    $quantidade = 10;

    for ($i = 0; $i < $quantidade; $i++) {
        echo "\nCadastro " . ($i + 1) . ":\n";
        $cadastros[] = cadastrarPessoa();
    }

    listarPessoasMaisDe18($cadastros);
    listarMulheres($cadastros);
?>
