
<?php
$n = explode(" ", readline());

$n1 = $n[0];
$n2 = $n[1];
$n3 = $n[2];

    //pequeno
    if($n1<$n2&&$n1<$n3){
    	
    $p=$n1;
	} 
	else if($n2<$n3&&$n2<$n1){	
	
    $p=$n2;
	} 
	else {
		
	$p=$n3;
	}
    
	//grande
    if($n1>$n2&&$n1>$n3){
    	
    $g=$n1;
	} 
	else if($n2>$n3&&$n2>$n1){
		
    $g=$n2;
	} 
	else {
		
	$g=$n3;
	}
	
    
    //médio
    if($g==$n1&&$p==$n2){
    	
    $m1=$n3;
    } 
	else if($g==$n1&&$p==$n3){
		
    $m1=$n2;
    } 
	else if($g==$n2&&$p==$n1){
		
    $m1=$n3;
    } 
	else if($g==$n2&&$p==$n3){
		
    $m1=$n1;
    } 
	else if($g==$n3&&$p==$n1){
		
    $m1=$n2;
    } 
	else if($g==$n3&&$p==$n2){
		
    $m1=$n1;
    }

    echo "$p\n";
    echo "$m1\n";
    echo "$g\n";
    echo "\n";
    echo "$n1\n";
    echo "$n2\n";
    echo "$n3\n";
?>

