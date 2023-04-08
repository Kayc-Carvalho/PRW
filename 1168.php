<?php
$n = intval(trim(readline()));
while($n>0){
    $p = trim(readline());
    $n--;
    $cont = '0';
    for($x = 0; $x < strlen($p);$x++){
        if($p[$x]==1){
            $cont += 2;
        } else if($p[$x]== 2 || $p[$x]== 3 || $p[$x] == 5){
            $cont += 5;
        } else if($p[$x]==4){
            $cont += 4;
        } else if($p[$x]==6 || $p[$x]==9 || $p[$x]==0){
            $cont += 6;
        } else if($p[$x]==7){
            $cont += 3;
        } else if($p[$x]==8){
            $cont += 7;
        } 
    }
    echo "$cont leds\n";
}
?>