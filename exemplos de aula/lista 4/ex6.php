<?php
//$_GET obtem dado do formulário enviado via GET
//$_POST obtem dado do fomeulário enviado via POST
//nome entre '' deve ser igual ao name do input
//definido no formulário html
$n = $_GET['nome'];
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];
$f = $_GET['freq'];
$med = ($n1+$n2)/2;
echo "Nome: $n<br>";
echo "<br>";
echo "Nota 1: $n1<br>";
echo "<br>";
echo "Nota 2: $n2<br>";
echo "<br>";
echo "Frequência: $f<br>";
echo "<br>";
echo "Média: $med<br>";
echo "<br>";

if($med < 5){
    echo "<h7 style ='color: red'>Situação: Reprova por nota</h7><br>";
    $calc = $n1+$n2;
    }
if($f < 75){
    echo "<h7 style ='color: red'>Situação: Reprova por frequência</h7><br>";
    }
if($med >= 5 && $f >= 75){
    echo "Situação: Aprovado<br>";
    }

    echo "<br>";
?>
<!-- codigo html do php-->
<a href='ex6.html'><button>Voltar</button></a>