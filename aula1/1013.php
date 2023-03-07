<?php

$n = explode(" ", readline());

$maior = number_format(($n[0]+$n[1]+abs($n[0]-$n[1]))/2.0,0,".","");

$maior = number_format(($maior+$n[2]+abs($maior-$n[2]))/2.0,0,".","");

echo "$maior eh o maior\n";


?>