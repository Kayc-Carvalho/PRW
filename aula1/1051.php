<?php
$n1 = readline();

if($n1<2000){
echo "Isento\n";
} else if($n1>2000 & $n1<=3000){
$ir = ($n1-2000) * 0.08;
$ir = number_format($ir,2,".","");
echo "R$ $ir\n";
}
else if($n1>3000 & $n1<=4500){
$ir = ($n1-3000) * 0.18 + (1000*0.08);
$ir = number_format($ir,2,".","");
echo "R$ $ir\n";
}
else {
$ir = ($n1-4500) * 0.28 + (1000*0.08) + (1500 * 0.18);
$ir = number_format($ir,2,".","");
echo "R$ $ir\n";
}

?>