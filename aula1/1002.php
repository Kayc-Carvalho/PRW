<?php
$pi = 3.14159;
$raio = readline();

$area = ($raio * $raio) * $pi;
$area = number_format($area, 4, ".", "");
echo "A=$area\n";



?>