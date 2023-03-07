<?php
$n1 = readline();

if ($n1>=0&&$n1<=400.00){
    	
    $n2=15;
    $calc1=$n1*$n2/100;
    $calc2=$n1+$calc1;
    
} 
else if($n1>=400.01&&$n1<=800.00){
    
    $n2=12;
    $calc1=$n1*$n2/100;
    $calc2=$n1+$calc1;
}
else if($n1>=800.01&&$n1<=1200.00){

    $n2=10;
    $calc1=$n1*$n2/100;
    $calc2=$n1+$calc1;
}
else if($n1>=1200.01&&$n1<=2000.00){
    
    $n2=7;
    $calc1=$n1*$n2/100;
    $calc2=$n1+$calc1;
    
} else {
    
    $n2=4;
    $calc1=$n1*$n2/100;
    $calc2=$n1+$calc1;
}
$calc1 = number_format($calc1,2,".","");
$calc2 = number_format($calc2,2,".","");
echo "Novo salario: $calc2\n";
echo"Reajuste ganho: $calc1\n";
echo "Em percentual: $n2 %\n";


?>