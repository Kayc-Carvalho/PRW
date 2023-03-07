<?php

$st = (int) readline();

$h = (int) ($st / 3600);

$mt = $st % 3600;

$m = (int) ($mt / 60);

$s = $mt % 60;
    
echo "$h",":$m",":$s\n";

?>