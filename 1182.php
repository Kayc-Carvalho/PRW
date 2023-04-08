<?php

#Coluna na Matriz

$c = intval(trim(fgets(STDIN)));
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
    $s += $M[$a][$c];
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