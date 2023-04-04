<?php

$n1 = readline();
$n2 = 1;
$n3 = 0;

while($n2<=10 && $n1<1000){

    if(2<$n1){
    $n3=$n1*$n2;

    echo "$n2 x $n1 = $n3\n";

    $n2 = $n2 + 1;

}
}
?>