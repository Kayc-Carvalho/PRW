<?php

$n = readline();
$i = 1;
$b = 0;
$s = 0;
while($b<$n){
$a = readline();

while($i<$a){
    if($a%$i==0){
        $s += $i;
    }
    $i++;
}
if($a == $s){
    echo "$a eh perfeito\n";
} else {
    echo "$a nao eh perfeito\n";
}
$s = 0;
$i = 1;
$b++;
}
?>