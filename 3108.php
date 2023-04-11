<?php

$n = readline();
$i = 0;
while($n>$i){
    
//$str = trim(fgets(STDIN));
$str = fgets(STDIN);

$str = str_replace('R', 'L', $str);
$str = str_replace('P', 'B', $str);
$str = str_replace('F', 'V', $str);
$str = str_replace('T', 'D', $str);
$str = str_replace('J', 'Z', $str);
$str = str_replace('X', 'S', $str);

$inv = strrev($str);

echo "$inv\n";
$i++;
}

?>