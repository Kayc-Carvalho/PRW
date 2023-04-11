<?php

$v = readline();
$d = readline();
$c = readline();

$t = $d/$v;
$ct = $d/$c;
$t = number_format($t, 2, ".", "");
$ct  = number_format($ct, 2, ".", "");
echo "Total horas: $t\n";
echo "Total combustivel: $ct\n";

?>