<?php

$n1 = 1;
$n2 = 5;//readline();
while($n2/=0){
    $n3=$n2;
while($n1<=$n2){
    echo "$n1";
    $n1 = $n1+1;
    if ($n1<=$n2){
        echo " ";
    }
   
}
}
echo "<br>";

?>
<?php


$x = explode(' ', readline());
$a = $x[0];
$r = 0;

for($i=1; true; $i++) {
if ($x[$i] > 0) {
$b = $x[$i];
break;
}
}

for($i = 0; $i<=$b-1; $i++){
$r += $a+$i;
}

echo $r."\n";


?>