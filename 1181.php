<?php
$l = intval(trim(fgets(STDIN)));
$t = strval(trim(fgets(STDIN)));
$M = array();
$s = 0;

for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $valor = floatval(trim(fgets(STDIN)));
        $M[$i][$j] = $valor;
    }
}

for($a = 0; $a<12;$a++){
    $s += $M[$l][$a];
}

$s = number_format($s,1,'.','');
$m = $s/12;
$m = number_format($m,1,'.','');

switch($t){
    case 'S':
        echo "$s\n";
        break;
    case 'M':
        echo "$m\n";
        break;
}
?>

<?php

// Lê a linha da matriz a ser somada e a operação a ser realizada (soma ou média)
$l = intval(trim(fgets(STDIN)));
$t = strval(trim(fgets(STDIN)));

// Cria uma matriz 12x12
$M = array();

// Inicializa a soma com zero
$s = 0;

// Preenche a matriz com os valores lidos da entrada padrão
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $valor = floatval(trim(fgets(STDIN)));
        $M[$i][$j] = $valor;
    }
}

// Soma os valores da linha l da matriz
for($a = 0; $a<12;$a++){
    $s += $M[$l][$a];
}

// Formata a soma com uma casa decimal
$s = number_format($s,1,'.','');

// Calcula a média dividindo a soma pelo número de elementos na linha
$m = $s/12;

// Formata a média com uma casa decimal
$m = number_format($m,1,'.','');

// Executa a operação solicitada (Soma ou Média)
switch($t){
    case 'S':
        echo "$s\n";
        break;
    case 'M':
        echo "$m\n";
        break;
}

?>