<?php
//Cotação
$inicio = date("m-d-Y",sattotime("-7 days"));
$fim= date("m-d-Y");
$url = '
https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.\''&@dataFinalCotacao=\''.$fim.''\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url),true);
 
 var_dump($dados);
 
 $cotação = $dados['Value'][0]["cotacaocompra"];
//Quantos $$ voce tem ?
$real = 1000;
//equivalencia em dolar
$dolar = $real / 5.17;

 echo "seus R\$".number_format($real, 2, ",",".")."equivalente a Us\$".number_format($dolar, 2) ;

?>