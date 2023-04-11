<?php
while (true) {
    // Lê a ordem da matriz
    $ordem = intval(trim(fgets(STDIN)));

    // Se a ordem for zero, encerra o programa
    if ($ordem === 0) {
        break;
    }

    // Inicializa a matriz com zeros
    $matriz = array_fill(0, $ordem, array_fill(0, $ordem, 0));

    // Preenche a matriz com os valores correspondentes
    for ($i = 0; $i < $ordem; $i++) {
        for ($j = 0; $j < $ordem; $j++) {
            if ($i === $j) {
                $matriz[$i][$j] = 1;
            } elseif ($i < $j) {
                $matriz[$i][$j] = $j - $i + 1;
            } else {
                $matriz[$i][$j] = $i - $j + 1;
            }
        }
    }

    // Imprime a matriz formatada
    for ($i = 0; $i < $ordem; $i++) {
        for ($j = 0; $j < $ordem; $j++) {
            echo sprintf("%3d", $matriz[$i][$j]);
        }
        echo "\n";
    }

    // Deixa uma linha em branco entre as matrizes
    echo "\n";
}
?>