<?php
$n=readline();
$X = array_map('intval', explode(' ', trim(fgets(STDIN))));
$a = intval(min($X));
$b = array_search($a, $X);

echo "Menor valor: $a\n";
echo "Posicao: $b\n";

?>