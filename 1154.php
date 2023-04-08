<?php
$i = 0;
$s = 0;
while(($n = readline())>=0){
    $s += $n;

    $i++;
}
$m = $s/$i;
$m = number_format($m,2,".","");
echo "$m\n"


?>