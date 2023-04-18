<?php
//$_GET obtem dado do formulário enviado via GET
//$_POST obtem dado do fomeulário enviado via POST
//nome entre '' deve ser igual ao name do input
//definido no formulário html
$l = $_GET['largura'];
$c = $_GET['comprimento'];

$calc = $l *$c;
echo "<h1>Área: $calc</h1>";


?>
<!-- codigo html do php-->
<a href='ex5.html'><button>Voltar</button></a>