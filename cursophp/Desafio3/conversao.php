<?php
//Cotação
$cotação = 4.95;
//Quantos $$ voce tem ?
$real = 1000;
//equivalencia em dolar
$dolar = $real / 5.17;

 echo "seus R\$".number_format($real, 2, ",",".")."equivalente a Us\$".number_format($dolar, 2) ;

?>