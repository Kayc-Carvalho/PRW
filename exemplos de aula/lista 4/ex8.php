<?php
//$_GET obtem dado do formulário enviado via GET
//$_POST obtem dado do fomeulário enviado via POST
//nome entre '' deve ser igual ao name do input
//definido no formulário html
$num = $_GET['num'];
$i = 0;
while($i<=10){
    $calc = $num *$i;
    echo "$num X $i = $calc<br>";
    $i++;
}
    echo "<br>";
?>
<!-- codigo html do php-->
<a href='ex8.html'><button>Voltar</button></a>