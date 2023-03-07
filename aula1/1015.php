<?php
$n1 = explode(' ', readline());
$n2 = explode(' ', readline());

$calc1 = ($n2[0]-$n1[0]) * ($n2[0]-$n1[0]);

$calc2 = ($n2[1]-$n1[1]) * ($n2[1]-$n1[1]);

$calc3 = sqrt($calc1 + $calc2);

$calc3 = number_format($calc3,4,".","");

echo "$calc3\n";
?>