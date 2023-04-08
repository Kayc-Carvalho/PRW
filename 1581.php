<?php
$n = fgets(STDIN);

$idioma = '';
for($i = 0;$i<$n;$i++){
    $a = fgets(STDIN);
    $b = 0;
        while($b<$a){
            $l = trim(fgets(STDIN));
                if($b == 0){
                    $idioma = $l; 
                }
                if($b>0){
                    if($l === $idioma){
                        $idioma = $l;
                    } else {
                        $idioma = 'ingles';
                    }
                }
            $b++;
        }
        $a = 0;
        echo $idioma . "\n";
}


?>