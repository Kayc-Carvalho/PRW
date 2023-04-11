<?php
    while(true)
    {
        $k = readline();
        if($k == 0){
            break;
        }
        $div = explode(' ', readline());
        $n = $div[0];
        $m = $div[1];
        $d = 1;
        for($cont=0;$cont<$k;$cont++)
        {           
            $cor = explode(' ', readline());
            $x = $cor[0];
            $y = $cor[1];
            
            if($n==$x&&$m==$y){
                echo "divisa\n";
            }
            else if($n==$x){
                echo "divisa\n";
            }
            else if($m==$y){
                echo "divisa\n";
            }
            else if($x>$n&&$y>$m){
                echo "NE\n";
            }
            else if($x>$n&&$y>$m){
                echo "NE\n";
            }
            else if($x<$n&&$y>$m){
                echo "NO\n";
            }
            else if($x<$n&&$y<$m){
                echo "SO\n";
            }
            else if($x>$n&&$y<$m){
                echo "SE\n";
            }
        }
    }

?>