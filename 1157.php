<?php
$n = readline();
$i = 1;

while($i<=$n){
    $calc = $n%$i;
    if($calc==0){
        echo "$i\n";
    }
    $i++;
}
?>