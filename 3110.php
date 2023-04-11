<?php

// Lê o tamanho da matriz
$n = intval(trim(fgets(STDIN)));

// Lê a matriz
$matriz = array();
for ($i = 0; $i < $n; $i++) {
    $matriz[$i] = explode(' ', trim(fgets(STDIN)));
}

// Lê o valor a ser buscado
$valor_busca = trim(fgets(STDIN));

// Inicializa uma lista vazia para armazenar as posições onde o valor é encontrado
$posicoes = array();

// Percorre a matriz em busca do valor
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($matriz[$i][$j] == $valor_busca) {
            // Se o valor for encontrado, adiciona a posição à lista de posições
            $posicoes[] = array($i, $j);
        }
    }
}

// Escreve as posições encontradas
if (count($posicoes) > 0) {
    echo "O valor $valor_busca foi encontrado nas seguintes posições:\n";
    foreach ($posicoes as $posicao) {
        echo "(" . $posicao[0] . ", " . $posicao[1] . ")\n";
    }
} else {
    echo "O valor $valor_busca não foi encontrado na matriz.\n";
}
?>