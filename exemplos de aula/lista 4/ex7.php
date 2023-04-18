<?php

// Lê o nome e a idade da pessoa
$nome = $_GET['nome'];; // substitua "Maria" pelo nome desejado
$idade = $_GET['idade'];; // substitua "30" pela idade desejada

$dias_de_vida = $idade * 365;

echo "<h2>$nome tem $dias_de_vida dias de vida</h2>";


?>
<a href='ex7.html'><button>Voltar</button></a>