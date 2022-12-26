<?php 

include 'calculadora.php';


$calc = new calculadora();
$calc -> somar(2);
$calc -> somar(12);
$calc -> subtrair(1);
$calc -> multiplicar(3);
$calc -> dividir(2);
$calc -> somar(0.5);


echo "TOTAL:".$calc->resultado;

?>