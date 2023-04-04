<?php

$a = readline();
$b = 1;

while($b<=10000){

    if($b % $a==2){

        echo "$b\n";

    }
    $b=$b+1;
}

?>