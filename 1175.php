<?php
 $x = 0;
 $v = array();

 while($x<20){
     $x++;
     $v[$x] = intval(trim(readline()));
 }
 
 $v = array_reverse($v);
 $x = 0;
 
 while($x<20){
     echo "N[$x] = " . $v[$x] . "\n";
     $x++;
 }

?>