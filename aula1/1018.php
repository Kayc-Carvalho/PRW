<?php

$n = readline();

$total = $n;
echo "$n\n";

$n100 = (int) ($n / 100);
echo "$n100 nota(s) de R$ 100,00\n";

$calc1 = $n % 100;

$n50 = (int) ($calc1 / 50);
echo "$n50 nota(s) de R$ 50,00\n";

$calc2 = $calc1 % 50;

$n20 = (int) ($calc2 / 20);
echo "$n20 nota(s) de R$ 20,00\n";

$calc3 = $calc2 % 20;

$n10 = (int) ($calc3 / 10);
echo "$n10 nota(s) de R$ 10,00\n";

$calc4 = $calc3 % 10;

$n5= (int) ($calc4 / 5);
echo "$n5 nota(s) de R$ 5,00\n";

$calc5 = $calc4 % 5;

$n2 = (int) ($calc5 / 2);
echo "$n2 nota(s) de R$ 2,00\n";

$calc6 = $calc5 % 2;

$n1 = (int) ($calc6 / 1);
echo "$n1 nota(s) de R$ 1,00\n";




?>