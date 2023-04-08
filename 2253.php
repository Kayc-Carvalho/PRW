<?php
while(($a = readline())!=""){
    $min = 0;
    $mai = 0;
    $num = 0;

    if(strlen($a) >= 6 && strlen($a)<=32){
        for($i = 0; $i<strlen($a); $i++){
            $n = intval(ord($a[$i]));
            if(($n>=97 && $n<=122) || ($n>=65 && $n<=90) || ($n>=48 && $n<=57)){
                if($n>=97 && $n<=122){
                    $min += 1;
                } else if($n>=65 && $n<=90){
                    $mai += 1;
                } else if($n>=48 && $n<=57){
                    $num += 1;
                }
                   
            } else {
                echo "Senha invalida.\n";
                goto fim;
            }
        }
        if($min!=0 && $mai!=0 && $num!=0){
            echo "Senha valida.\n";
            goto fim;
            
        } else {
            echo "Senha invalida.\n";
            goto fim;
        }

    } else {
        echo "Senha invalida.\n";
        goto fim;
    }
    
    fim:
}
?>