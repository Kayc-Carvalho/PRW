<?php

$vetor = array();

for($x=0;$x<100; $x++){
    $vetor[$x] = floatval(readline());

    $vetor[$x] = number_format($vetor[$x], 1, ".", "");


}

for($x=0;$x<100;$x++){
    if($vetor[$x]<=10){

        echo "A[$x] = ". $vetor[$x] . "\n";
    }
}
