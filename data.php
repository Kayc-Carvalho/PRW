<?php
//Seta fuso horário de São Paulo
date_default_timezone_set('America/Sao_Paulo');


echo "Data atual: ". date('D/m/y')."<br>";
echo "Data atual: ". date('d-m-y')."<br>";
echo "Data e hora atual; ". date('d/m/Y H:i:s'). "<br>";


$data_hoje = date('d/m/Y');


echo $data_hoje;


//Implementar Mês e Ano
$data = date('d/m/Y');
$dia = substr($data,3,10);
echo "Dia: ".$dia."<br>";



?>