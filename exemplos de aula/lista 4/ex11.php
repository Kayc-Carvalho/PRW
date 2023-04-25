<?php
//$_GET obtem dado do formulário enviado via GET
//$_POST obtem dado do fomeulário enviado via POST
//nome entre '' deve ser igual ao name do input
//definido no formulário html
$pr = $_GET['pront'];
$n = $_GET['nome'];
$id = $_GET['id'];
$pe = $_GET['per'];
$m = $_GET['per'];

if($pr == 0 ){
    echo "Prontuário não pode estar em branco<br>";
}
if($n == 0){
    echo "Nome não pode estar em branco<br>";
}
if($id <=15){
    echo "Idade deve ser um valor entre 15 e 75 anos<br>";
}
if($id >=75){
    echo "Idade deve ser um valor entre 15 e 75 anos<br>";
}
if($pe == "V" && $pe == "N"){
    echo "Período deve ser V-Vespertino ou N-Noturno<br>";
}
if($m >= 1){
    echo "Módulo pode ser um valor entre 1 e 4<br>";
}
if($m <= 4){
    echo "Módulo pode ser um valor entre 1 e 4<br>";
}
else{
    echo "Todos os dados foram corretamente preenchidos";
}
echo "<br>";
?>
<!-- codigo html do php-->
<a href='ex11.html'><button>Voltar</button></a>