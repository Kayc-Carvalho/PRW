<?php

$n1 = readline();
$n2 = readline();
$n3 = readline();
$n4 = readline();
$n4 = readline();
$n5 = readline();
$n6 = readline();

$p = 0;

$p1 = 0;
$p2 = 0;
$p3 = 0;
$p4 = 0;
$p5 = 0;
$p6 = 0;

if ($n1>0){
    $p = $p+1;
    $p1 = $n1;
}
if ($n2>0){
    $p = $p+1;
    $p2 = $n2;
}
if ($n3>0){
    $p = $p+1;
    $p3 = $n3;
}
if ($n4>0){
    $p = $p+1;
    $p4 = $n4;
}
if ($n5>0){
    $p = $p+1;
    $p5 = $n5;
}
if ($n6>0){
    $p = $p+1;
    $p6 = $n6;
}

echo "$p valores positivos\n";

$calc = ($p1+$p2+$p3+$p4+$p5+$p6)/$p;

$calc = number_format($calc,1,".","");
echo "$calc\n";
?>