<?php
$nome = readline();
$sf = readline();
$v = readline();

$calc= $sf + ($v *0.15);
$calc = number_format($calc, 2, ".", "");

echo "TOTAL = R$ $calc\n";

?>
