<?php

$total = (int) readline();

    $ano = (int) ($total / 365);

    $totaldia = $total % 365;

    $meses = (int) ($totaldia / 30);

    $dia = $totaldia % 30;

echo "$ano ano(s)\n";
echo "$meses mes(es)\n";
echo "$dia dia(s)\n";
?>