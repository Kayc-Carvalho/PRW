<?php
$a = 0;
$g = 0;
$d = 0;
while(true){
    $n = readline();
    if($n == 4){
        break;
    }
    switch($n){
        case '1':
            $a++;
            break;
        case '2':
            $g++;
            break;
        case '3':
            $d++;
            break;
    }
}

echo "MUITO OBRIGADO\n";
echo "Alcool: $a\n";
echo "Gasolina: $g\n";
echo "Diesel: $d\n"



?>