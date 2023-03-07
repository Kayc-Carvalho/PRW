<?php

$x = explode(' ', readline());

$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);

$tri = ($A*  $C) / 2.0;
$tri = number_format($tri, 3, ".", "");

$cir = 3.14159 * $C * $C;
$cir = number_format($cir, 3, ".", "");

$qua = $B * $B;
$qua = number_format($qua, 3, ".", "");

$tra = ($A + $B) * $C / 2.0;
$tra = number_format($tra, 3, ".", "");

$ret = $A * $B;
$ret = number_format($ret, 3, ".", "");


echo "TRIANGULO: $tri\n";
echo "CIRCULO: $cir\n";
echo "TRAPEZIO: $tra\n";
echo "QUADRADO: $qua\n";
echo "RETANGULO: $ret\n";

?>