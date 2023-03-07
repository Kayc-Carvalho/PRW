
<?php 
$n1 = readline();
if ($n1>=0&&$n1<=25){
    	
   echo "Intervalo [0,25]\n";
} 
else if($n1>25&&$n1<=50){
    
    echo "Intervalo (25,50]\n";
}
else if($n1>50&&$n1<=75){
    
    echo "Intervalo (50,75]\n";
}
else if($n1>75&&$n1<=100){
    
    echo "Intervalo (75,100]\n";
    
} else {
    
    echo "Fora de intervalo\n";
}
?>