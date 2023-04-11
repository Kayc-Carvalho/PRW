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

<?php
//esse aqui é o do leo, e que por sinal esta certo
$n = readline();
$i = 0;

$s = 0;
$s1 = 0; 
$b = 0; 
$b1 = 0; 
$a = 0; 
$a1 = 0; 

while($i<$n){
$nome = fgets(STDIN);

$x = explode(" ", fgets(STDIN));
$S = intval($x[0]);
$B = intval($x[1]);
$A = intval($x[2]);

$x1 = explode(" ", fgets(STDIN));
$S1 = intval($x1[0]);
$B1 = intval($x1[1]);
$A1 = intval($x1[2]);

$s += $S;
$s1 += $S1; 
$b += $B; 
$b1 += $B1; 
$a += $A; 
$a1 += $A1; 


$i++;
}
$ps = number_format(($s1/$s)*100,2,".","");
$pb = number_format(($b1/$b)*100,2,".","");
$pa = number_format(($a1/$a)*100,2,".","");

echo "Pontos de Saque: $ps %.\n";
echo "Pontos de Bloqueio: $pb %.\n";
echo "Pontos de Ataque: $pa %.\n";
?>