<?php

$n = explode(" ", readline());

$a = $n[0];
$b = $n[1];

$calc = $b % $a;

if ($a<$b && $calc==0)
{
    echo "Sao Multiplos";
}
else if($a>$b)
{
    $calc = $a % $b;

    if ($calc == 0)
    {
        echo "Sao Multiplos";
    }
    else
    {
        echo "Nao sao Multiplos";
    }
}
else
{
    echo "Nao sao Multiplos";
}

?>