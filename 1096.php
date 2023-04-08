<?php

#Sequência IJ 2
$j = 7;
for($i=1;$i<=9;true){
    echo "I=$i J=$j\n";
    $j--;
    if($j==4){
        $j = 7;
        $i +=2;
    }
}
?>