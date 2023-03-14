<?php
$x =explode(' ', fgets(STDIN));

$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);

if(($A>=$B+$C)||($B>=$A+$C)||($C>=$A+$B)){
echo "NAO FORMA TRIANGULO\n";
} else if(($A**2 == $B**2+$C**2)||($B**2 == $C**2+$A**2)||($C**2 == $B**2+$A**2)){
echo "TRIANGULO RETANGULO\n";
} else if(($A**2 >$B**2+$C**2)||($B**2 >$A**2+$C**2)||($C**2 >$B**2+$A**2)){
echo "TRIANGULO OBTUSANGULO\n";
} else if(($A**2 <$B**2+$C**2)||($B**2 <$A**2+$C**2)||($C**2 <$B**2+$A**2)){
echo "TRIANGULO ACUTANGULO\n";
}
if($A == $B && $B == $C & $C == $A){
echo "TRIANGULO EQUILATERO\n";
}
if(($A == $B && $C != $A)||($B == $C && $A != $C)||($C == $A && $B != $A)){
echo "TRIANGULO ISOSCELES\n";
}


?>