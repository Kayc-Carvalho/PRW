<?php
$n = readline();
$x[0] = 0;
$x[1] = 1;

$fibo = "$x[0] $x[1]";

for($a=2;$a<$n;$a++){
    $x[$a] = $x[$a-2] + $x[$a-1];
    $fibo .= " $x[$a]";
}

echo "$fibo\n"


?>