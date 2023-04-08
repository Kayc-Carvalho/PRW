<?php
$a = intval(readline());

while($a>0){
    $p = trim(readline());
    $a--;
    $n= '0';
    $x = '0';
    $t = '0';
    $l = '0';
    
    while($x<(strlen($p))){
        $n = intval(ord($p[$x]));
        if(($n>=97 && $n<=122) || ($n>=65 && $n<=90) ){
            $n += 3;
        }
        $p[$x] = chr($n);
        $x++;
    }
    $f = "";
    
 $f = strrev($p);
    $l = intval(intval((strlen($f)/2)*100)/100);
    
    while($l<(strlen($f))){
        $t = ord($f[$l]);
        $t -= 1;
        $f[$l] = chr($t);
        $l++;
    }
    echo "$f\n";
}
?>