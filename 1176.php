<?php

$x = array(0, 1);

$b = intval(trim(readline()));

for ($c = 0; $c < $b; $c++) {
    $n = intval(trim(readline()));
    
    for ($p = 2; $p <= $n; $p++) {
        $x[$p] = $x[$p-1] + $x[$p-2];
    }
    
    echo "Fib($n) = $x[$n]\n";
}

?>