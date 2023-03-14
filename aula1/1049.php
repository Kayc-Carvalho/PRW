<?php

$a = readline();
$b = readline();
$c = readline();

if ($a == "vertebrado"){
    if ($b == "ave"){
        if ($c == "carnivoro"){
            echo "aguia\n";
        }
        else if ($c == "onivoro"){
            echo "pomba\n";
        }
    }
    else if ($b == "mamifero"){
        if ($c == "herbivoro"){
            echo "vaca\n";
        }
        else if ($c == "onivoro"){
            echo "homem\n";
        }
    }
}

else if ($a == "invertebrado"){
    if ($b == "inseto"){
        if ($c == "hematofago"){
            echo "pulga\n";
        }
        else if ($c == "herbivoro"){
            echo "lagarta\n";
        }
    }
    else if ($b == "anelideo"){
        if ($c == "hematofago"){
            echo "sanguessuga\n";
        }
        else if ($c == "onivoro"){
            echo "minhoca\n";
        }
    }
}

?>