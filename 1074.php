<?php
$n = readline();

for($i=0;$i<$n;$i++){
$a = readline();
if($a == 0){
echo "NULL\n";
} else {
if($a%2==0 & $a>0){
echo "EVEN POSITIVE\n";
} else if($a%2==0 & $a<0){
echo "EVEN NEGATIVE\n";
} else {
if($a>0){
echo "ODD POSITIVE\n";
} else {
echo "ODD NEGATIVE\n";
}
}

}
}
?>