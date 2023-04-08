<?php

$a = readline();

for($i=0;$i<$a;$i++){
    $x = explode(' ', readline());
    $A = floatval($x[0]) * 2 ;
    $B = floatval($x[1]) * 3;
    $C = floatval($x[2]) * 5;
    $mp = number_format(($A + $B + $C) / 10, 1 , ".", "");
    echo "$mp\n";
}
?>
