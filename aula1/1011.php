<?php
$raio = readline();
$pi = 3.14159;

$calc= (4.0/3) * $pi * ($raio * $raio * $raio);
$calc = number_format($calc, 3, ".", "");

echo "VOLUME = $calc\n";

?>
