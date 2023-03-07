<?php
    $n = explode(" ", readline());

    $a = $n[0];
    $b = $n[1];
    $c = $n[2];

    $calc1=$a+$b+$c;
	
	$calc2=(($a+$b)*$c)/2;
	
	if($a>$b&&$a>$c){
    $g=$a;
	} else if($b>$a&&$b>$c){
    $g=$b;
	} else {
	$g=$c;
	}
    
    if($a<$b&&$a<$b){
    $p=$a;
	} else if($b<$a&&$b<$c){
    $p=$b;
	} else {
	$p=$c;
	}
	
	if($g==$a&&$p==$b){
    $m=$c;
    } else if($g==$a&&$p==$c){
    $m=$b;
    } else if($g==$b&&$p==$a){
    $m=$c;
    } else if($g==$b&&$p==$c){
    $m=$a;
    } else if($g==$c&&$p==$a){
    $m=$b;
    } else if($g==$c&&$p==$b){
    $m=$a;
    }
    $calc1 = number_format($calc1, 1, ".","");
    $calc2 = number_format($calc2, 1, ".","");
	if(($m+$p)>$g){
		echo "Perimetro = $calc1\n";
	} else {
		echo "Area = $calc2\n";
	}

?>