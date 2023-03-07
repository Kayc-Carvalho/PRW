<?php
$num = readline();
$h = readline();
$s = readline();
$calc= ($h * $s);
$calc = number_format($calc, 2, ".", "");
echo "NUMBER = $num\n";

echo "SALARY = U$ $calc\n";

?>