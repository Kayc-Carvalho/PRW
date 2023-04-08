<?php
while(true){
    $n = explode(" ", readline());
    $x = $n[0];
    $y = $n[1];
    if($x==$y){
        break;
    }
    if($x>$y){
        echo "Decrescente\n";
    } else if($x<$y){
        echo "Crescente\n";
    }   
}
?>