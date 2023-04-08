<?php

#Sequência IJ 3
$j = 7;
for($i=1;$i<=9;true){
    echo "I=$i J=$j\n";
    $j--;
    if(($j-$i)<4){
        $j += 5;
        $i +=2;
    }
}



?>