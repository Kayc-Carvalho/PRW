<?php

$n = readline();
$cont = 1;
$ts = 0;
$tb = 0;
$ta = 0;
while($cont<=$n){

$nome = readline();

$feitos = explode(' ', fgets(STDIN));
$acertos =explode(' ', fgets(STDIN));

$s = floatval($feitos[0]);
$b = floatval($feitos[1]);
$a = floatval($feitos[2]);

$sA = floatval($acertos[0]);
$bA = floatval($acertos[1]);
$aA = floatval($acertos[2]);

$ps = ($sA*$s)/100;
$pb = ($bA*$b)/100;
$pa = ($aA*$a)/100;

$ts = $ts + $ps;
$tb = $tb + $pb;
$ta = $ta + $pa;







//para caso precise, some os valores dos percentuais e divida no final por $n


$cont++;
}
$ts = number_format($ts, 2, ".", "");
$tb = number_format($tb, 2, ".", "");
$ta = number_format($ta, 2, ".", "");
echo "Pontos de Saque: $ts%\n";
echo "Pontos de Bloqueio: $tb%\n";
echo "Pontos de Ataque: $ta&\n";

?>