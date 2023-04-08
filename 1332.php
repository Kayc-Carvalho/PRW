<?php 
$n = readline();

while($n>0){
   $p = readline();
   $n--;
   $x = 0;
   $m = 0;

   if (strlen($p) > 3) {
    $x = 3;
   } else {

   if(($p[0] == "o") && ($x != 3)) {
    $m++;
   }
   if(($p[1] == "n") && ($x != 3)) {
    $m++;
   }
   if(($p[2] == "e") && ($x != 3)) {
    $m++;
   }
   if($m>=2){
    $x = 1;
   } else {
    $x = 2;
   }
   }

   echo "$x\n";

}




?>