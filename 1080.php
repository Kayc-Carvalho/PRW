<?php 

$m = 0;

for($a=0;$a<100;$a++){
    $x = readline();
    if($x>$m){
        $m = $x;
        $pos = $a+1;
    }
}

 echo "$m\n";
 echo "$pos\n";



?>