<?php
$x =explode(' ', fgets(STDIN));

$X = floatval($x[0]);
$Y = floatval($x[1]);

if($Y>0 && $X>0){
echo "Q1\n";
} else if($Y>0 && $X<0){
echo "Q2\n";
} else if($Y<0 && $X<0){
echo "Q3\n";
}else if($Y<0 && $X>0){
echo "Q4\n";
}else if($Y==0&$X!=0){
echo "Eixo X\n";
}else if($X==0&$Y!=0){
echo "Eixo Y\n";
} else if($Y==0&&$X==0){
echo "Origem\n";
}

?>