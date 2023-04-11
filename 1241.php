<?php
$n = intval(trim(fgets(STDIN)));

$a = 0;

while($a<$n){
$X = explode(' ', strval(trim(fgets(STDIN))));
$cou = 0;
$A = $X[0];
$B = $X[1];
$b = strlen($B);

$C = strrev($A);
$D = strrev($B);

if(strlen($A)>=strlen($B)){
for($i = 0; $i<$b;$i++){
    if($D[$i] == $C[$i]){
        $cou++;
    } else {
        $i++;
    }
}} 
if($cou == $b){
    echo "encaixa\n";
} else {
    echo "nao encaixa\n";
}
$a++;
}
?>
