<?php
$a = readline();
$b = readline();
$c = readline();
$d = readline();

$prod= ($a * $b - $c * $d);
$prod = number_format($prod, 0, "", "");
echo "DIFERENCA = $prod\n";

?>